@extends('app')

@section('content')

<h1>{{$page->name}}</h1>
<hr/>
<article>
    <h3>Alias: {{$page->alias}}</h3>
    <div class="body">{{$page->description}}</div>
    <br/>
    <a href="{{action('PageController@index')}}">&lt;&lt;Go Back</a>
</article>


@stop