@extends('app')

@section('content')

    <h1 style="margin-top: 40px">Articles</h1>
    <hr/>
    @foreach($articles as $article)

        <article>

            <h2>
                <a href="{{action('ArticleController@show', [$article->id])}}">{{$article->title}}</a>
            </h2>

            <div class="description">{{$article->description}}</div>

        </article>

    @endforeach

@stop