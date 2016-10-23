@extends('layouts.master')

@section('content')
    <form method="post" action="/lipsum">
        {{ csrf_field() }}
        Number of paragraphs: <input type="text" maxlength="2" name="paragraphCount">
        <input type="submit" value="Generate">
    </form>
@endsection
