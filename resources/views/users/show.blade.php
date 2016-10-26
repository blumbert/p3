@extends('users.index')

@section('content')
    @parent

    @foreach ($users as $user)
        <p>{{ $user['name'] }}</p>
        @if (isset($user['birthdate']))
            <p>{{ $user['birthdate'] }}</p>
        @endif
        @if (isset($user['profile']))
            <p>{{ $user['profile'] }}</p>
        @endif
    @endforeach
@endsection
