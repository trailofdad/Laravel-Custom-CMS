@extends('app')

@section('content')

    <h1>Edit: {!! $user->email !!}</h1>

    <hr/>

    {!! Form::model($user, ['method' => 'PATCH', 'action' => ['UserController@update', $user->id]]) !!}

    @include('users.form',['submitButtonText' => 'Update User'])

    {!! Form::close() !!}

@endsection
@stop