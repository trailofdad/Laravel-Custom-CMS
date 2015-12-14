@extends('app')

@section('content')

    <h1>{{$users->FirstName}}</h1>
    <hr/>
    <article>
        <div class="body">{{$users->email}}</div>
        <br/>
        <a href="{{action('UserController@index')}}"class="btn btn-primary">Go Back</a>
        <a href="{{ route('users.edit', $users->id) }}" class="btn btn-primary">Edit User</a>
    </article>
    <div class="pull-right">
        {!! Form::open([ 'method' => 'DELETE', 'route' => ['users.destroy', $users->id]]) !!}
        {!! Form::submit('Delete?', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    </div>

@stop