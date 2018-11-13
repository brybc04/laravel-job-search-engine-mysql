@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header text-center ">
    <h1> Create Your CV</h1>
                </div>
                <br>
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}
    <div class="form-group col-10">
        {{Form::label('mainSkills', 'Main Skills')}}
        {{Form::textarea('', '', ['class'=> 'form-control', 'placeholder' => 'Describe your top skill in few words'])}}

    </div>

    <div class="form-group  col-10">
            {{Form::label('workExperience', 'Work Experience')}}
            {{Form::textarea('workExperience', '', ['class'=> 'form-control',  'placeholder' => 'Describe your work experience in few words'])}}

        </div>

        <div class="form-group col-10">
                {{Form::label('education', 'Education')}}
                {{Form::textarea('education', '', ['class'=> 'form-control', 'rows' => '7','placeholder' => 'Where did you study?'])}}

            </div>


    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}

        {!! Form::close() !!}
                </div></div></div></div>
@endsection
