@extends('app')

@section('content')

    <h1 style="margin-top: 40px">Edit: {!! $contentArea->title !!}</h1>

    <hr/>

    {!! Form::model($contentArea, ['method' => 'PATCH', 'action' => ['ContentAreaController@update', $contentArea->id]]) !!}

    @include('contentAreas.form',['submitButtonText' => 'Update Content Area'])

    {!! Form::close() !!}


@endsection
@stop