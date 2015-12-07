@extends('app')

@section('content')

<h1>Edit: {!! $page->title !!}</h1>

<hr/>

{!! Form::model($page, ['method' => 'PATCH', 'action' => ['PageController@update', $page->id]]) !!}

@include('pages.form',['submitButtonText' => 'Update Page'])

{!! Form::close() !!}


@endsection
@stop