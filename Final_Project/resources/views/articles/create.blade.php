@extends('app')

@section('content')

    <h1>Create a new article</h1>

    <hr/>

    {!! Form::model($article = new \App\Article, ['url' => 'articles']) !!}

    @include('articles.form', ['submitButtonText' => 'Create Article'])

    {!! Form::close() !!}

@stop