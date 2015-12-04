@extends('app')

@section('content')

    <h1>Create a new page</h1>

    <hr/>

    {!! Form::model($page = new \App\Page, ['url' => 'pages']) !!}

    @include('pages.form', ['submitButtonText' => 'Create Article'])

    {!! Form::close() !!}

@stop