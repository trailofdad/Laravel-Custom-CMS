@extends('app')

@section('content')

    <h1>Create a new user</h1>

    <hr/>

    {!! Form::model($user = new \App\User, ['url' => 'users']) !!}

    @include('users.form', ['submitButtonText' => 'Create User',  'permissionsArray' => $permissionsArray,
                                    'activePermissions' => null])

    {!! Form::close() !!}

@stop