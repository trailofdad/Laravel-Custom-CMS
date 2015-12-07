@extends('app')

@section('content')

    <h1>{{$template->name}}</h1>
    <hr/>
    <article>
        <div class="body">{{$template->css}}</div>
        <br/>
        <a href="{{action('TemplateController@index')}}" class="btn btn-primary">Go Back</a>
        <a href="{{ route('templates.edit', $template->id) }}" class="btn btn-primary">Edit Template</a>
    </article>
    <div class="pull-right">
        {!! Form::open([ 'method' => 'DELETE', 'route' => ['templates.destroy', $template->id]]) !!}
        {!! Form::submit('Delete?', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    </div>

@stop