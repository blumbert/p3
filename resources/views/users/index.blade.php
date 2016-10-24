@extends('layouts.master')

@section('content')
    <form>
        How many users? <input type="text" maxlength="1" name="userCount"><br>
        Birthday? <input type="checkbox" name="birthday" value="Y"><br>
        Profile? <input type="checkbox" name="profile" value="Y">
    </form>
@endsection
