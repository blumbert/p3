@extends('layouts.master')

@section('content')
    <form method="post" action="/lipsum">
        {{ csrf_field() }}
        Number of paragraphs: <input type="text" maxlength="2" name="paragraphCount">
        <input type="submit" value="Generate">
    </form>

    @if(count($errors) > 0)
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif
@endsection
