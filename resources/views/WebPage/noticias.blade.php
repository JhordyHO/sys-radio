@extends('layouts.web')
@section('content')
    <section class="content">
        <div class="container">
            <h2>Noticias</h2>
        </div>
        <div id="cd-timeline" class="cd-container">
            <div class="container">
                @php
                    setlocale(LC_TIME, 'Spanish');
                    \Carbon\Carbon::setUtf8(true);
                @endphp
                @php($position = 'fadeInLeft')
                @foreach($noti as $n)
                 @if($position == 'fadeInLeft')
                        @php($position = 'fadeInRight')
                   @else
                        @php($position = 'fadeInLeft')
                    @endif
                    <div class="cd-timeline-block  animate {{$position}}">
                        <div class="cd-timeline-date"> <span class="month">{{ucwords ($n->created_at->formatLocalized('%B'))}}</span> <span class="day">{{$n->created_at->format('d')}}</span> <span class="year">{{$n->created_at->format('Y')}}</span> </div>
                        <div class="cd-timeline-content">
                            <div class="wrapper">
                                <div class="image-cell"><a href="{{$n->slug_url}}"><img src="{{$n->banner}}" class="img-responsive animate scale animated" alt="" draggable="false"></a>
                                    <div class="post-date"><span class="icon flaticon-clock"></span>&nbsp;{{$n->created_at->formatLocalized('%A %d %B %Y')}} por <a href="#" class="color">{{$n->Autor->name}}</a></div>
                                    <div class="post-comment pull-right"><a href="#"><span class="icon flaticon-comment"></span>41</a><a href="#"><span class="icon flaticon-heart"></span>17</a></div>
                                </div>
                            </div>
                            <div class="title">
                                <h3><a href="#">{{$n->title}}</a></h3>
                            </div>
                            <p>{{$n->resume}}</p>
                        </div>
                        <!-- cd-timeline-content -->
                    </div>
                @endforeach

            </div>
        </div>
    </section>
@endsection