@extends('app')

@section('content')

    <h1 style="margin-top: 40px">Create a new content area</h1>

    <hr/>

    {!! Form::model($contentArea = new \App\ContentArea, ['url' => 'contentAreas']) !!}

    @include('contentAreas.form', ['submitButtonText' => 'Create Area'])

    {!! Form::close() !!}

@stop