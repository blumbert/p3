@extends('lipsum.index')

@section('content')
    @parent

    @foreach ($paragraphs as $paragraph)
        <p>{{ $paragraph }}</p>
    @endforeach
    
@endsection
