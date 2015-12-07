@extends('app')

@section('content')

    <h1 style="margin-top: 40px">Create a new article</h1>

    <hr/>

    {!! Form::model($article = new \App\Article, ['url' => 'articles']) !!}

    @include('articles.form', ['submitButtonText' => 'Create Article', 'pages'=>$pages , 'contentAreas'=>$contentAreas])

    {!! Form::close() !!}

@stop