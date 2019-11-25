@extends('layouts.app')

@section('content')

<div class="container" id="app">
        
        <h1>Dragon92</h1>
        <div class="row">
            <div class="col-md-8">
                <div class="embed-responsive embed-responsive-16by9">
                    <!-- <video loop class="embed-responsive-item" controls>
                       
                        <source src="storage/videos/Amigos.mp4" type='video/mp4'>
                    </video> -->
                    <video class="img-responsive" src="storage/videos/Amigos.mp4" loop controls/>
                </div>
                
            <div>
                      <ul class="nav nav-tabs">
                            <li class="nav-item">
                              <a class="nav-link active" href="#">Descripcion</a>
                            </li>
                            <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                              </div>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                            </li>
                      </ul>
                    <div class="col-md-12">
                        <h2>titulo</h2>
                        <p>des</p>
                        <hr>    
                        <p>cifras</p>
                        <a href="#descripcion" class="btn btn-primary" data-toggle="collapse">Mostrar mas / Ocultar</a>
                        <div class="collapse" id="descripcion">
                          <hr>
                          <p>Caracteristicas: caracteristicas</p>
                          <hr>
                          <p>Descripcion: descripcion</p>
                          <hr>
                          <div class="media">
                              <img src="https://blogpilates.es/wp-content/uploads/2018/03/Instructor-de-Pilates-CAPA.png" class="align-self-start mr-3 img-thumbnail" alt="perfil_instructor" width="150" height="150">
                              <div class="media-body">
                                <h3 class="mt-0 mb-3">Instructor</h3>
                                <h5 class = "mb-0">instructor</h5>
                                <small>Autodidacta y apasionado de la programación en general</small>
                                <p class="mt-3">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                <p class="mb-0">Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                          </div>
                        </div>
                        <a href="#descripcion" class="btn btn-primary justify-content-center" data-toggle="collapse">Ver menos</a>

                    </div>
              </div>
            </div>
            <!-- lado derecha         -->

            </div>
                <div class="col-md-4">
                    <h3>Contenido del curso</h3>
                    <div style="overflow: scroll; height:500px">
                    <div class="list-group">
                            <a href="#" class="list-group-item list-group-item-action active">
                              <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">List group item heading</h5>
                                <small>3 days ago</small>
                              </div>
                              <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                              <small>Donec id elit non mi porta.</small>
                            </a>
                    </div>
                    <div class="list-group" v-for="item in 3" >
                        <a href="#" class="list-group-item list-group-item-action">
                          <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">List group item heading</h5>
                            <small>3 days ago</small>
                          </div>
                          <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                          <small>Donec id elit non mi porta.</small>
                        </a>
                    </div>
              </div>
            </div>
            
    </div>

@endsection
