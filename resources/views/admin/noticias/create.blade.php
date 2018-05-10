<form method="post" action="{{url('guardarN')}}">
    {{csrf_field()}}
    <input type="text" name="body" placeholder="cuerpo noticia">
    <input type="text" name="url" placeholder="url">
    <input type="text" name="estado" placeholder="estado">
    <input type="text" name="titulo" placeholder="titulo">
    <input type="submit" value="Enviar">
</form>

<table>
    @foreach($noti as $n)
        <tr>
            <td>{{$n->titulo}}</td>
            <td>{{$n->body}}</td>
            <td>{{$n->estado}}</td>
            <td>{{$n->url}}</td>
            <td><a href="#" onclick="editar({{$n->idnoticia}})">Edit
                </a>
            </td>
        </tr>
     @endforeach

</table>

<script
        src="http://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>

<script>
    function editar($idnoticia) {
        alert($idnoticia)
        $.get('/viewN/'+$idnoticia,function ($data) {
            console.log($data);
        });

    }
</script>
