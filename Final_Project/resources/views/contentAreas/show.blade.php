@extends('app')

@section('content')

    <h1 style="margin-top: 40px">{{$contentArea->name}}</h1>
    <hr/>
    <article>
        <h3>Alias: {{$contentArea->alias}}</h3>
        <div class="body">{{$contentArea->description}}</div>
        <br/>
        <a href="{{action('ContentAreaController@index')}}" class="btn btn-primary">Go Back</a>
        <a href="{{ route('contentAreas.edit', $contentArea->id) }}" class="btn btn-primary">Edit Content Area</a>
    </article>
    <div class="pull-right">
        {!! Form::open([ 'method' => 'DELETE', 'route' => ['contentAreas.destroy', $contentArea->id]]) !!}
        {!! Form::submit('Delete?', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    </div>

@stop