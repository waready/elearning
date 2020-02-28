@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{url('/videos')}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}

    @include('administrar-videos.form',['Modo'=>'crear'])
    
    </form>
</div>
@endsection