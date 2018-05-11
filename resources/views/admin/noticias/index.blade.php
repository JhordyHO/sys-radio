@extends('layouts.app')
@section('header')
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/wizard.css">
@endsection
@section('content')
    <div class="modal fade"  data-backdrop="static" data-keyboard="false" id="modal-file" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Seleccionar Imagen</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="getfile"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade new-noticial"  data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Nueva Noticia</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                </div>
                <div class="modal-body">

                </div>
            </div>
        </div>
    </div>
    <style>
        ul.pagination li {
            display: inline;
            font-size: 12px;
            font-weight: bold;
        }

        ul.pagination li a {

            color: black;
            padding: 8px 8px;
            text-decoration: none;
            transition: background-color .3s;
            border: 1px solid #ddd;
            margin: 4px;
        }

        ul.pagination li a.active {
            background-color: #4CAF50;
            padding: 8px 8px;
            margin: 4px;
            color: white;
            border: 1px solid #4CAF50;
        }

        ul.pagination li.active {
            /*background-color: #4CAF50;*/
            background-color: #687282;
            padding: 8px 8px;
            margin: 4px;
            color: white;
            border: 1px solid #4CAF50;
        }

        /*ul.pagination li a:hover:not(.active) {background-color: #ddd;}*/
        ul.pagination li a:hover {background-color: #999999;}

        ul.pagination li.disabled {
            /*background-color: #cccccc;*/
            color: #ddd;
            padding: 8px 8px;
            border: 1px solid #ddd;
            margin: 4px;
        }
    </style>

    <section>
        <div class="row">
            <div id="tab_list" class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Noticias Creadas</h4>
                    </div>
                    <div class="card-block">
                        <!-- Outline Icon Button toolbar group -->
                        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                            <div class="btn-group" role="group" aria-label="First Group">
                                <button type="button" class=" btn_news btn btn-raised btn-icon btn-outline-danger"><i class="fa fa-plus"></i></button>
                                <button type="button" class="btn btn-raised btn-icon btn-outline-secondary"><i class="fa fa-moon-o"></i></button>
                                <button type="button" class="btn btn-raised btn-icon btn-outline-primary"><i class="fa fa-cloud-download"></i></button>
                            </div>
                            <div class="btn-group mx-2" role="group" aria-label="Second Group">
                                <button type="button" class="btn btn-raised btn-icon btn-outline-success"><i class="fa fa-thermometer"></i></button>
                                <button type="button" class="btn btn-raised btn-icon btn-outline-warning"><i class="fa fa-gavel"></i></button>
                                <button type="button" class="btn btn-raised btn-icon btn-outline-info"><i class="fa fa-tint"></i></button>
                            </div>
                            <div class="btn-group" role="group" aria-label="Third Group">
                                <button type="button" class="btn btn-raised btn-icon btn-outline-danger"><i class="fa fa-cloud"></i></button>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <table class="table table-responsive-sm text-center">
                            <thead>
                            <tr>
                                <th>Autor</th>
                                <th>Titulo</th>
                                <th>fecha</th>
                                <th>Status</th>
                                <th>URL</th>
                                <th>actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                                setlocale(LC_TIME, 'Spanish');
                                \Carbon\Carbon::setUtf8(true);
                            @endphp
                            @foreach($noti as $not)
                                <tr>
                                    <td>
                                        <img src="app-assets/img/portrait/small/avatar-s-11.png" alt="Brek" width="50" class="rounded-circle gradient-orange-amber">
                                    </td>
                                    <td>{{$not->title}}</td>
                                    <td>{{$not->created_at->formatLocalized('%A %d %B %Y')}}</td>
                                    <td>
                                        <a class="btn white btn-round btn-primary">Active</a>
                                    </td>
                                    <td>
                                        <a href="noticia/{{$not->slug_url}}" class="btn btn-raised btn-icon btn-pure success mr-1"><i class="fa fa-external-link"></i></a>
                                    </td>
                                    <td>
                                        <a class="danger" data-original-title="" title="">
                                            <i class="fa fa-delete"></i>
                                        </a>
                                        <a onclick="edit({{$not->idpost}})" class="success" data-original-title="" title="">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{$noti->links()}}
                    </div>
                </div>
            </div>
            <div id="tab_create" style="display: none;" class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-block">
                            <form class="icons-tab-steps wizard-circle formNews" method="POST" action="{{ url('saveNoticia') }}">
                                <!-- Step 1 -->
                                <h6>Titulo de la Noticia</h6>
                                <fieldset>
                                    {{ csrf_field() }}
                                    <input type="hidden" id="id_post" name="idpost">
                                    <input id="permalien2" type="hidden" name="link"></p>
                                    <div class="row">
                                        <div class="col-md-12 pl-1 pr-1">
                                            <div class="card card card-outline-primary box-shadow-0 text-center">
                                                <div class="card-body">
                                                    <img class="card-img-top img-fluid banner" src="app-assets/img/photos/06.jpg" style="height: 200px;" >
                                                    <div class="card-block">
                                                        <input id="title" type="text" class="form-control" name="title" onkeyup="changeTitle(this)"  required autofocus placeholder="Titulo">
                                                        <hr>
                                                        <p class="card-text">. . . . . . . . . . . </p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <!-- Step 2 -->
                                <h6>Crear el Contenido</h6>
                                <fieldset>
                                    <div class="row">
                                        <label for="content" class="col-md-3 control-label">Contenido</label>
                                        <div class="col-md-12">
                                            <textarea id="content"  name="content"></textarea>
                                        </div>
                                    </div>
                                </fieldset>
                                <!-- Step 3 -->
                                <h6>Imagen Portada</h6>
                                <fieldset>
                                    <div class="row">
                                        <input id="url_img" type="hidden" class="form-control" name="banner" >
                                        <div class="col-md-12 pl-1 pr-1">
                                            <div class="card card card-outline-primary box-shadow-0 text-center">
                                                <div class="card-body">
                                                    <a href = "javascript:void(0)" onclick="getImagenElfinder('#preview_img','#url_img')">
                                                        <img id="preview_img" class="banner card-img-top img-fluid" src="app-assets/img/photos/06.jpg" style="height: 200px;"  >
                                                    </a>
                                                    <div class="card-block">
                                                        <h4 class="card-title" id="titulo_preview"></h4>
                                                        <hr>
                                                        <p class="card-text">Resumen de la notica</p>
                                                        <textarea name="resume" class="news_resume form-control"></textarea>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('script')
    <script src="{{asset('ckeditor/ckeditor.js')}}"></script>
    <script src="{{asset('/js/jquery-ui.js')}}"></script>
    <script src="{{asset('packages/barryvdh/elfinder/js/elfinder.full.js')}}"></script>
    <script>
        $(document).ready( function(){

            String.prototype.sansAccent = function(){
                var accent = [
                    /[\300-\306]/g, /[\340-\346]/g, // A, a
                    /[\310-\313]/g, /[\350-\353]/g, // E, e
                    /[\314-\317]/g, /[\354-\357]/g, // I, i
                    /[\322-\330]/g, /[\362-\370]/g, // O, o
                    /[\331-\334]/g, /[\371-\374]/g, // U, u
                    /[\321]/g, /[\361]/g, // N, n
                    /[\307]/g, /[\347]/g, // C, c
                ];
                var noaccent = ['A','a','E','e','I','i','O','o','U','u','N','n','C','c'];

                var str = this;
                for(var i = 0; i < accent.length; i++){
                    str = str.replace(accent[i], noaccent[i]);
                }

                return str;
            };


            $(".icons-tab-steps").steps({
                headerTag: "h6",
                bodyTag: "fieldset",
                transitionEffect: "fade",
                titleTemplate: '<span class="step">#index#</span> #title#',
                labels: {
                    finish: 'Crear',
                    next: 'Siguiente',
                    previous: 'Atras'
                },
                onFinished: function (event, currentIndex) {
                    var conten = CKEDITOR.instances.content.getData();
                    $('#content').val(conten);
                    var data = $('.formNews').serializeArray();
                    $.ajax({
                        url : '{{url('saveNoticia')}}',
                        method : 'post',
                        data : data,
                        success : function (data) {
                            location.reload()
                        }
                    });
                }
            });

            var config = {
                language: '{{ config('app.locale') }}',
                height: 100,

                filebrowserBrowseUrl: '/files/ckeditor',
                toolbarGroups: [
                    { name: 'clipboard',   groups: [ 'clipboard', 'undo' ] },
                    { name: 'editing',     groups: [ 'find', 'selection', 'spellchecker' ] },
                    { name: 'links' },
                    { name: 'insert' },
                    { name: 'forms' },
                    { name: 'tools' },
                    { name: 'document',	   groups: [ 'mode', 'document', 'doctools' ] },
                    { name: 'others' },
                    //'/',
                    { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
                    { name: 'paragraph',   groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ] },
                    { name: 'styles' },
                    { name: 'colors' }
                ]
            };
            config['height'] = 300;
            config.skin = 'office2013';
            CKEDITOR.replace( 'content', config);
        });

        function getImagenElfinder(resul,input) {
            $('#modal-file').modal('show');
            $('#getfile').elfinder({
                resizable: false,
                url: "<?= route("elfinder.connector") ?>",
                lang : 'es',
                customData : {'_token':'{{csrf_token()}}'},
                commandsOptions: {
                    getfile: {
                        oncomplete: 'destroy'
                    }
                },
                getFileCallback: function(file) {
                    console.log(file.url);
                    $(resul).attr('src',file.url);
                    $(input).val(file.url);
                    $('#modal-file').modal('toggle');
                },
                handlers : {
                    // extract archive files on upload
                    upload : function(event, instance) {
                        var uploadedFiles = event.data.added;
                        for (i in uploadedFiles) {
                            var file = uploadedFiles[i];
                            instance.exec('extract', file.hash);
                        }
                    },

                    open   : function(event) { }
                }
            }).elfinder('instance')
        }

        var changeTitle = function(obj) {
            var str = ($(obj).val()).sansAccent();
            str = str.replace(/[^a-zA-Z0-9\s]/g,"");
            str = str.toLowerCase();
            str = str.replace(/\s/g,'-');
            console.log(str);
            $("#permalien2").val(str);
            $("#titulo_preview").text(($(obj).val()));
        };

        $('.btn_news').click(function () {
            $('#tab_list').attr('class', 'col-6');
            $('#tab_create').show(300);
            $('#tab_create').attr('class', 'col-6');
        });

        function edit(id_post) {
            $('#tab_list').attr('class', 'col-6');
            $('#tab_create').show(300);
            $('#tab_create').attr('class', 'col-6');

            $.ajax({
                url:'{{url('getPost')}}',
                method:'get',
                data:{id_post:id_post},
                success:function (data) {
                        $('#id_post').val(data.idpost);
                        $('#title').val(data.title);
                        $('.news_resume').val(data.resume);
                      var conten = CKEDITOR.instances.content;
                    conten.setData(data.body);
                        $('.banner').attr('src',data.banner);
                        $('#url_img').val(data.banner);
                        $('#permalien2').val(data.slug_url);
                }

            })

        }
    </script>
@endsection