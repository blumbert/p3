@extends('lipsum.index')

@section('text')
    @foreach ($paragraphs as $paragraph)
        <p>{{ $paragraph }} </p>
    @endforeach
@endsection
