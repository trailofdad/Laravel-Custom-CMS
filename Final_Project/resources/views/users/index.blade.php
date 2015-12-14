@extends('app')

@section('content')

    <h1 style="margin-top: 40px">Users</h1>
    <hr/>
    @foreach($users as $user)

        <article>

            <h2>
                <a href="{{action('UserController@show', [$user->id])}}">{{$user->FirstName}}</a>
            </h2>

            <div class="description">{{$user->email}}</div>

        </article>
        <br>
        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary">Edit User</a>
    @endforeach

@stop