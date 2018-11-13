@extends('layouts.app')

@section('content')
    <h2>Job Matches:</h2>
    <li>
     @foreach ($search as $search)
     {{$search->title}}
     @endforeach
</li>
@endsection
