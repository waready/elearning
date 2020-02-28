<form action="{{ url('/videos/'.$video->id)}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}

    <label for="name">{{'Name'}}</label>
    <input name="name" id="name" type="text" required autofocus value="{{$video->name}}">
    <br>

    <label for="conten">{{'Contenido'}}</label>
    <textarea name="conten" id="conten" type="text" required>{{$video->conten}}</textarea>
    <br>

    <label for="video">{{'Video'}}</label>
    <br>
    <video width="250" controls>
        <source src="{{asset('storage').'/'.$video->video}}" type="video/mp4">
        <source src="{{$video->video}}" type="video/ogg">
        Your browser does not support HTML5 video.
    </video>
    <br>
    <input name="video" id="video" type="file" value="">
    <br>

    <label for="password-confirm">{{'Curso'}}</label>
    <div class="col-md-6">
        <select class="custom-select" name="course_id">
        <option selected name="curso">Curso...</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
        </select>
    </div>
    <br>

    <input type="submit" value="Editar">

</form>