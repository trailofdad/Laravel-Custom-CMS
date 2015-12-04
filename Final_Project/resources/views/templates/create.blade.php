@extends('app')

@section('content')

    <h1>Create a new template</h1>

    <hr/>

    {!! Form::model($template = new \App\Template, ['url' => 'templates']) !!}

    @include('templates.form', ['submitButtonText' => 'Create Template'])

    {!! Form::close() !!}

@stop