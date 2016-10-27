@extends('users.index')

@section('content')
    @parent

    @foreach ($users as $user)
        <div class="user">
            <div><strong>{{ $user['name'] }}</strong></div>
            @if (isset($user['birthdate']))
                <div>{{ $user['birthdate'] }}</div>
            @endif
            @if (isset($user['profile']))
                <div>{{ $user['profile'] }}</div>
            @endif
        </div>
    @endforeach
@endsection
