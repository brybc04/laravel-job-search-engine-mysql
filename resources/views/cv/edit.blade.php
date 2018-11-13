@extends('layouts.app')

@section('content')
<div class="container">

            {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST']) !!}
            <div class="form-group">
                {{Form::label('mainSkills', 'mainSkills')}}
                {{Form::text('mainSkills', $post->mainSkills, ['class'=> 'form-control', 'placeholder' => 'Main Skills'])}}

            </div>

            <div class="form-group">
            {{Form::label('workExperience', 'workExperience')}}
                    {{Form::textarea('workExperience', $post->workExperience, ['class'=> 'form-control', 'placeholder' => 'Work Experience'])}}

                </div>

                <div class="form-group">
                        {{Form::label('education', 'education')}}
                        {{Form::text('education', $post->education, ['class'=> 'form-control', 'placeholder' => 'Education'])}}

                    </div>


            {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}

                {!! Form::close() !!}


  </div>
