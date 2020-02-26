@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar video  {{$lecciones}}</h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Video Upload</div>
                
                <div class="card-body">
                    <form method="PUT"  action="{{ route('video.update', $lecciones->id) }}" novalidate enctype="multipart/form-data">
                    @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" 
                                name="name" value="{{$lecciones->name}}" required autofocus>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="conten" class="col-md-4 col-form-label text-md-right">Contenido</label>

                            <div class="col-md-6">
                                <textarea  id="conten" type="textarea" class="form-control" 
                                name="conten"  required> {{$lecciones->conten}}</textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="video" class="col-md-4 col-form-label text-md-right">Video</label>

                            prewiev {{$lecciones->video}}
                            <div class="col-md-6">
                                <div class="custom-file">
                                    <input type="file" class="form-control" name="file">
                                
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Curso</label>

                            <div class="col-md-6">
                                    <select class="custom-select" name="course_id">
                                    <option selected name="curso">Curso...</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                    </select>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</div>
</div>
@endsection
