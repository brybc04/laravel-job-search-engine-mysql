@extends('layouts.app')

@section('content')
{{--
<h1>My Cv</h1>
@if(count($posts) > 0)
    @foreach ($posts as $post)
        <div class="card card-body bg-light">

             <h3>{{$post->mainSkills}}</h3>
            <h3>{{$post->workExperience}}</h3>
            <h3>{{$post->education}}</h3>
            {{--  <small>Posted by on {{$post ->created_at}} by {{$post->user->name}} </small>  --}}

        {{--  </div><br>
    @endforeach
    {{$posts->links()}}
@else
    <p> No post found</p>
@endif  --}}

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
