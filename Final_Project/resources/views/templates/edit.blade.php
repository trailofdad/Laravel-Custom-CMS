@extends('app')

@section('content')

<h1>Edit: {!! $template->title !!}</h1>

<hr/>

{!! Form::model($template, ['method' => 'PATCH', 'action' => ['TemplateController@update', $template->id]]) !!}

@include('templates.form',['submitButtonText' => 'Update Template'])

{!! Form::close() !!}


@endsection
@stop