@extends('app')

@section('content')

<h1>{{$page->title}}</h1>
<hr/>
<article>
<div class="body">{{$page->body}}</div>
<br/>
<a href="{{action('PageController@index')}}">&lt;&lt;Go Back</a>
</article>


@stop