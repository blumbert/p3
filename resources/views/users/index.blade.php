@extends('layouts.master')

@section('content')
    <form method="post" action="/users">
        {{ csrf_field() }}
        How many users? <input type="text" maxlength="1" name="userCount"><br>

        @if ($errors->has('userCount'))
            <ul>
            @foreach ($errors->get('userCount') as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        @endif

        Birthday? <input type="checkbox" name="birthday" value="Y"><br>
        Profile? <input type="checkbox" name="profile" value="Y"><br>
        <input type="submit" value="Generate Users">
    </form>

    @yield('userInfo')

@endsection
