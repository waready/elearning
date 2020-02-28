<form action="{{url('/videos')}}" method="post" enctype="multipart/form-data">
{{csrf_field()}}
<label for="name">{{'Name'}}</label>
<input name="name" id="name" type="text" required autofocus>
<br>
<label for="conten">{{'Contenido'}}</label>
<input name="conten" id="conten" type="text" required>
<br>
<label for="video">{{'Video'}}</label>
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
<input type="submit" value="Agregar">
<br>
</form>