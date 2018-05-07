@extends('layouts.master')

@section('content')
    <ul>
        @foreach ($tests as $test)
            <li><a href="tests/{{ $test->id }}">text: {{ $test->text }}</a></li>
        @endforeach
    </ul>
@endsection