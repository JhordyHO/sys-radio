<?php

namespace App\Http\Controllers\Auth;

use App\Person;
use App\User;
use Facebook\Exceptions\FacebookResponseException;
use Facebook\Exceptions\FacebookSDKException;
use Facebook\Facebook;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SocialController extends Controller
{
    use AuthenticatesUsers;
    protected $fields = 'id,email,first_name,last_name,gender,locale,picture,link';
    protected $token;
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function init(){
        $fb = new Facebook([
            'app_id' => env('FB_ID_APP'),
            'app_secret' => env('FB_KEY_SECRET'),
            'default_graph_version' => 'v2.10',
            'persistent_data_handler'=>'session'
        ]);
        return $fb;
    }
    public function login(){
        session_start();
        $helper = $this->init()->getRedirectLoginHelper();
        if (!(isset($_GET['state']))){
            $permissions = ['email','publish_actions','publish_pages','manage_pages']; // Optional permissions
            $loginUrl = $helper->getLoginUrl(route('authfb'), $permissions);
            return redirect($loginUrl);
        }else{
            $helper->getPersistentDataHandler()->set('state', $_GET['state']);
            $_SESSION['FBRLH_state']=$_GET['state'];
            return $this->callbackurl();
        }
    }
    public function callbackurl(){
        try {
            $helper = $this->init()->getRedirectLoginHelper();
            $this->token = $helper->getAccessToken();
            $response = $this->init()->get('/me?fields='.$this->fields,$this->token);
        } catch(FacebookResponseException $e) { exit;
        } catch(FacebookSDKException $e) { exit;
        }
         $login =$this->usLogin($response->getGraphUser());
        Auth::login($login);
        return  redirect()->intended($this->redirectPath());
    }

    public function usLogin($user){
      $model = User::whereIdsocial($user->getId())->first();
        if (!$model){
            $model = $this->registerUser($user);
        }
       return $model;
    }
    public function registerUser($data){
        $us = new User();
           $us->name = $data->getFirstName();
           $us->idsocial = $data->getId();
           $us->email = $data->getEmail();
           $us->accestoken = $this->token;
           $us->password = bcrypt('##l0ginSocial');
        $us->save();
        $per = new Person();
            $per->first_name = $data->getFirstName();
            $per->last_name = $data->getLastName();
            $per->picture = 'https://graph.facebook.com/'.$data->getId().'/picture?width=500&height=500';
            $per->birthdate = $data->getBirthday();
            $per->gender = $data->getGender();
            $per->type_login = 'fb';
            $per->links_social = '::'.$data->getLink();
            $per->status = 1;
            $per->user_id = $us->id;
        $per->save();

        return $us;
    }
}
