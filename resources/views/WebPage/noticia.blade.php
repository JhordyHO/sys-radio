@extends('layouts.web')
@section('content')
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-8 col-lg-9">
                    <h1>Noticia</h1>
                    <!-- Blog post -->
                    <div class="blog-post full-post">
                        <div class="title">
                            <h2><a href="#">{{$noti->title}}</a></h2>
                        </div>
                        <div class="post-container">
                            <div class="animate scale animated"> <img class="img-responsive" src="{{asset($noti->banner)}}" alt="">
                                <div class="post-date"><span class="icon flaticon-clock"></span>{{$noti->created_at->format('d F Y')}}</div>
                                <div class="post-comment"><a href="#">41 Comments</a></div>
                            </div>
                            <div class="divider-md"></div>
                            {!! $noti->body !!}
                            <div class="divider-sm"></div>
                            <h3>TAGS</h3>
                            <ul class="tags-list">
                                <li><a href="#">Radio Station</a></li>
                                <li><a href="#">Live Radio</a></li>
                                <li><a href="#">Audio</a></li>
                            </ul>
                        </div>
                        <div class="bg-grey">
                            <h3>Comments (2) </h3>
                            <section class="comments">
                                <div class="comment">
                                    <div class="inside">
                                        <p><strong>Username</strong> |   Sep 15, 2015 at 6:15 pm / <a href="#">Replay</a></p>
                                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam enim enim, pharetra in sodales at, interdum sit amet dui. Nullam vulputate euismod urna non pharetra. Phasellus blandit mattis ipsum, ac laoreet lorem lacinia et. Cras et et lacus ullamcorper imperdiet. Curabitur quis tortor. Proin ac risus.</p>
                                    </div>                <div class="comment">
                                        <div class="inside">
                                            <p><strong>Username</strong> |   Sep 15, 2015 at 6:15 pm / <a href="#">Replay</a></p>
                                            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam enim enim, pharetra in sodales at, interdum sit amet dui. Nullam vulputate euismod urna non pharetra. Phasellus blandit mattis ipsum, ac laoreet lorem lacinia et. Cras et et lacus ullamcorper imperdiet. Curabitur quis tortor. Proin ac risus.</p>
                                        </div>
                                    </div>
                                </div>

                            </section>
                            <div class="divider-md"></div>
                            <div class="comment-form row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="InputName">Your name:<span class="required">*</span></label>
                                        <input type="text" id="InputName" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="InputEmail">Your e-mail:</label>
                                        <input type="text" id="InputEmail" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group"> <span class="icon icon-bubbles-2"></span>
                                        <label for="InputComment">Comment:<span class="required">*</span></label>
                                        <textarea class="form-control" id="InputComment"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-default">ADD COMMENT</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- //end Blog post -->

                </div>
                <div class="col-sm-4 col-md-4 col-lg-3">
                    <div class="container-widget">
                        <h3>Post Categories</h3>
                        <ul class="simple-list">
                            <li><a href="#">Audios (<span class="color">2</span>)</a></li>
                            <li><a href="#">Daily Inspiration (<span class="color">7</span>)</a></li>
                            <li><a href="#">Freelance (<span class="color">3</span>)</a></li>
                            <li><a href="#">Links (<span class="color">1</span>)</a></li>
                            <li><a href="#">Mobile (<span class="color">1</span>)</a></li>
                            <li><a href="#">Photography (<span class="color">5</span>)</a></li>
                            <li><a href="#">Quotes (<span class="color">1</span>)</a></li>
                            <li><a href="#">Resources (<span class="color">3</span>)</a></li>
                            <li><a href="#">Status (<span class="color">1</span>)</a></li>
                        </ul>
                    </div>
                    <div class="container-widget">
                        <h3>TAGS</h3>
                        <ul class="tags-list">
                            <li><a href="#">Radio Station</a></li>
                            <li><a href="#">Live Radio</a></li>
                            <li><a href="#">Audio</a></li>
                            <li><a href="#">Podcasts</a></li>
                            <li><a href="#">Hip hop</a></li>
                            <li><a href="#">Joy</a></li>
                            <li><a href="#">Music</a></li>
                            <li><a href="#">Author</a></li>
                            <li><a href="#">Rap</a></li>
                            <li><a href="#">Underground</a></li>
                            <li><a href="#">R&amp;B</a></li>
                            <li><a href="#">Interviews</a></li>
                            <li><a href="#">Reggae</a></li>
                            <li><a href="#">Jazz</a></li>
                            <li><a href="#">rnb</a></li>
                            <li><a href="#">Indie</a></li>
                            <li><a href="#">Rock</a></li>
                            <li><a href="#">Live</a></li>
                            <li><a href="#">Country Music</a></li>
                        </ul>
                    </div>
                    <div class="posts-widget container-widget">
                        <h3>RECENT POSTS</h3>
                        <ul>
                            <li><span class="post-date"><span class="icon flaticon-clock"></span>&nbsp;May 19, 2015 - 3:55 PM MST</span> <a href="#"><img src="images/liveradio/img-blog-post-recent-1.jpg" alt=""></a> <a href="#" class="title">Phasellus id
                                    nisi vitae odio
                                    pretm aliquam</a>  </li>
                            <li><span class="post-date"><span class="icon flaticon-clock"></span>&nbsp;May 19, 2015 - 3:55 PM MST</span> <a href="#"><img src="images/liveradio/img-blog-post-recent-2.jpg" alt=""></a> <a href="#" class="title">Integer ligula
                                    magna dictum
                                    et pulvinar</a>  </li>
                            <li><span class="post-date"><span class="icon flaticon-clock"></span>&nbsp;May 19, 2015 - 3:55 PM MST</span> <a href="#"><img src="images/liveradio/img-blog-post-recent-3.jpg" alt=""></a> <a href="#" class="title">odio pretium
                                    aliquam
                                    Pellentes</a>  </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection