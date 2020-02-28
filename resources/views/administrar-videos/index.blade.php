<div class="container">
    <div class="row">
            <h2 class="col-md-8">Videos del curso 
                ...
            </h2>
            <div class="col-md-4">
                <a
                href="../lecciones/video/create"
                class="btn btn-success btn-lg "
                >
                Subir Nuevo Video&nbsp;<i class="fa fa-upload"></i>
                </a> 
            </div>
    </div>
    <table class="table mt-2">

        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Tema</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Video</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>

        <tbody>
        @foreach($videos as $video)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$video->name}}</td>
                <td>{{$video->conten}}</td>
                <td>
                <!-- <img src="{{$video->video}}" alt=""> -->
                <video width="150" controls>
                    <source src="{{asset('storage').'/'.$video->video}}" type="video/mp4">
                    <source src="{{$video->video}}" type="video/ogg">
                    Your browser does not support HTML5 video.
                </video>
                </td>
                <td>
                <a href="{{url('/videos/'.$video->id.'/edit')}}">
                    Editar
                </a>
                |
                <form action="{{url('/videos/'.$video->id)}}" method="post">
                {{csrf_field()}}
                {{ method_field('DELETE') }}
                <button type="submit" onclick="return confirm('Deseas borrar este video?');">Borrar</button>
                </form>

                </td>
            </tr>
        @endforeach
        </tbody>

    </table>
</div>