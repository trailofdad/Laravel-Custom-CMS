@extends('app')

@section('content')

    <h1 style="margin-top: 40px">Create a new page</h1>

    <hr/>

    {!! Form::model($page = new \App\Page, ['url' => 'pages']) !!}

    @include('pages.form', ['submitButtonText' => 'Create Page'])

    {!! Form::close() !!}

@stop