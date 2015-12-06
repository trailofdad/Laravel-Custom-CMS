@extends('app')

@section('content')

    <h1 style="margin-top: 40px">{{$contentArea->name}}</h1>
    <hr/>
    <article>
        <h3>Alias: {{$contentArea->alias}}</h3>
        <div class="body">{{$contentArea->description}}</div>
        <br/>
        <a href="{{action('PageController@index')}}">&lt;&lt;Go Back</a>
    </article>


@stop