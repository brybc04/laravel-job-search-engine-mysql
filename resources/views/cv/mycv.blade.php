@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"> <h3>Your CV</h3></div>
                @if(count($posts) > 0)

                <div class="card-body">
                 @foreach ($posts as $post)
                    <p>{{$post->user->name}}</p>
                    <p><b> Main Skills</b> <br>{{$post->mainSkills}} </p>
                    <p> <b>Work Experience</b> <br> {{$post->workExperience}}</p>
                    <p><b>Education</b> <br>{{$post->education}}</p>
                @endforeach
                </div>
                <div>
                 @endif
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
