@extends('app')

@section('content')

    <h1 style="margin-top: 40px">{{$article->title}}</h1>
    <hr/>
    <article>
        <div class="body">{{$article->html}}</div>
        <br/>
        <a href="{{action('ArticleController@index')}}" class="btn btn-primary">Go Back</a>
        <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-primary">Edit Article</a>
        {{--//this is the edit code working--}}
    </article>

    <div class="pull-right">
            {!! Form::open([ 'method' => 'DELETE', 'route' => ['articles.destroy', $article->id]]) !!}
            {!! Form::submit('Delete?', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
    </div>
@stop