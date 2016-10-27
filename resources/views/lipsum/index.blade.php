@extends('layouts.master')

@section('title')
    {{ $title }}
@endsection

@section('content')
    <form method="post" action="/lipsum">
        {{ csrf_field() }}
        Number of paragraphs (max: 9): <input type="text" maxlength="1" name="paragraphCount">
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
