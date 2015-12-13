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
        <br>
        <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-primary">Edit Article</a>
    @endforeach

    <script type="text/javascript">
        var root = '{{url("/")}}';
    </script>
    <script type="text/javascript" src='{{ url("js/main.js") }}'></script>
    <script type="text/javascript" src='//code.jquery.com/jquery-1.10.2.min.js'></script>
    <script type="text/javascript" src='{{ url("vendor/selectize/js/standalone/selectize.min.js") }}'></script>
@stop