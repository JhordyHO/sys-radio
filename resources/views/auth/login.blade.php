@extends('layouts.login')

@section('content')
<section id="login">
    <div class="container-fluid">
        <div class="row full-height-vh">
            <div class="col-12 d-flex align-items-center justify-content-center">
                <div class="card gradient-shdow-night text-center width-400">
                    <div class="card-img overlap">
                        <img alt="element 06" class="mb-1" src="app-assets/img/portrait/avatars/avatar-08.png" width="190">
                    </div>
                    <div class="card-body">
                        <div class="card-block">
                            <h2 class="white">Login</h2>
                            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                                {{ csrf_field() }}
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus placeholder="Email">

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                             <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                                        <input placeholder="password" id="password" type="password" class="form-control" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                </div>
                                <div class="form-group" style="margin: 5%">

                                    <button type="submit" class="btn  btn-round   btn-foursquare col-8 text-center">
                                        <span class="fa fa-user"></span> Entrar</button>
                                    <br>

                                    <a href="{{url('authfb')}}" class="btn btn-social-icon btn-round mr-2 mb-2 btn-facebook"><span class="fa fa-facebook"></span></a>
                                    <a class="btn btn-social-icon btn-round mr-2 mb-2 btn-google"><span class="fa fa-google"></span></a>
                                    <a class="btn btn-social-icon btn-round mr-2 mb-2 btn-twitter"><span class="fa fa-twitter"></span></a>


                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="float-left">
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                Forgot Your Password?
                            </a></div>
                        <div class="float-right"><a href="register" class="white">New User?</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
