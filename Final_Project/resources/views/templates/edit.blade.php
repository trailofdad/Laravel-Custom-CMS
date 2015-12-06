@extends('app')

@section('content')

<h1>Edit: {!! $template->title !!}</h1>

<hr/>

{!! Form::model($template, ['method' => 'PATCH', 'action' => ['TemplateController@update', $template->id]]) !!}

@include('pages.form',['submitButtonText' => 'Update Template'])

{!! Form::close() !!}

@include('errors.list')

@endsection
@stop