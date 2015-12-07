@extends('app')

@section('content')

<h1 style="margin-top: 40px">{{$page->name}}</h1>
<hr/>
<article>
    <h3>Alias: {{$page->alias}}</h3>
    <div class="body">{{$page->description}}</div>
    <br/>
    <a href="{{action('PageController@index')}}" class="btn btn-primary">Go Back</a>
    <a href="{{ route('pages.edit', $page->id) }}" class="btn btn-primary">Edit Page</a>
</article>

<div class="pull-right">
    {!! Form::open([ 'method' => 'DELETE', 'route' => ['pages.destroy', $page->id]]) !!}
    {!! Form::submit('Delete?', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
</div>
@stop