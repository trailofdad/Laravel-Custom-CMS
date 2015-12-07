@extends('app')

@section('content')

    <h1 style="margin-top: 40px">{{$article->title}}</h1>
    <hr/>
    <article>
        <div class="body">{{$article->html}}</div>
        <br/>
        <a href="{{action('ArticleController@index')}}">&lt;&lt;Go Back</a>
    </article>


@stop