@extends('layouts.admin')

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" class="css">
@stop
@section('content')
    <h1>Media</h1>

    {!! Form::open(['method'=>'POST','action'=>'AdminMediasController@store','class'=>'dropzone','files'=>true]) !!}

    {!! Form::close() !!}


@stop

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
@stop