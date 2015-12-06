@extends('app')

@section('content')

    <h1>{{$template->name}}</h1>
    <hr/>
    <article>
        <div class="body">{{$template->css}}</div>
        <br/>
        <a href="{{action('TemplateController@index')}}">&lt;&lt;Go Back</a>
    </article>


@stop