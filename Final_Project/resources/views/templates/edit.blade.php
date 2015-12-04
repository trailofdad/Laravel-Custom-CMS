@extends('app')

@section('content')

<h1>Edit: {!! $page->title !!}</h1>

<hr/>

{!! Form::model($page, ['method' => 'PATCH', 'action' => ['PagesController@update', $page->id]]) !!}

@include('pages.form',['submitButtonText' => 'Update Page'])

{!! Form::close() !!}

@include('errors.list')

@endsection
@stop