@extends('layouts.master')

@section('content')
    <form method="post" action="/users">
        {{ csrf_field() }}
        How many users? (max: 99) <input type="text" maxlength="2" name="userCount" value="{{ old('userCount') }}"><br>

        @if ($errors->has('userCount'))
            <ul>
            @foreach ($errors->get('userCount') as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        @endif

        Birthday? <input type="checkbox" name="birthdate" value="Y"><br>
        Profile? <input type="checkbox" name="profile" value="Y"><br><br>
        <input type="submit" value="Generate Users">
    </form>

    @yield('userInfo')

@endsection
