

<label for="name">{{'Name'}}</label>
<input name="name" id="name" type="text" required autofocus 
value="{{ isset($video->name) ? $video->name : ''}}"
>
<br>
<label for="conten">{{'Contenido'}}</label>
<input name="conten" id="conten" type="text" required
value="{{ isset($video->conten) ? $video->conten : ''}}"
>
<br>
<label for="video">{{'Video'}}</label>
@if(isset($video->video))
<br>
<video width="250" controls>
    <source src="{{asset('storage').'/'.$video->video}}" type="video/mp4">
    <source src="{{$video->video}}" type="video/ogg">
    Your browser does not support HTML5 video.
</video>
<br>
@endif
<input name="video" id="video" type="file" required>
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

<input type="submit" value="{{ $Modo=='crear' ? 'Agregar':'Modificar' }}">

<div class="col-md-4">
    <a
    href="{{url('videos')}}"
    class="btn btn-success btn-lg "
    >
    Regresar&nbsp;<i class="fa fa-upload"></i>
    </a> 
</div>
<br>