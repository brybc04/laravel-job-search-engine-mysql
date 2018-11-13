@extends('layouts.app')

@section('content')
    <h1> Edit Job</h1>
    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST']) !!}
    <div class="form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title', $post->title, ['class'=> 'form-control', 'placeholder' => 'Title'])}}

    </div>

    <div class="form-group">
            {{Form::label('description', 'Description')}}
            {{Form::textarea('description', $post->description, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Description'])}}
        </div>


    <div class="form-group">
            {{Form::label('salary', 'Salary')}}
            {{Form::text('salary', $post->salary, ['class'=> 'form-control', 'placeholder' => 'Salary'])}}

    </div>


    <div class="form-group">
            {{Form::label('type', 'Type')}}
            {{Form::text('type', $post->type, ['class'=> 'form-control', 'placeholder' => 'Type'])}}

    </div>

    <div class="form-group">
            {{Form::label('skills', 'Skills')}}
            {{Form::text('skills', $post->skills, ['class'=> 'form-control', 'placeholder' => 'Skills'])}}


    </div>

    <div class="form-group">
            {{Form::label('compName', 'Company Name')}}
            {{Form::text('compName', $post->compName, ['class'=> 'form-control', 'placeholder' => 'Company Name'])}}

    </div>

    <div class="form-group">
            {{Form::label('compDescription', 'Company Description')}}
            {{Form::text('compDescription', $post->compDescription, ['class'=> 'form-control', 'placeholder' => 'Company Description'])}}

    </div>

    <div class="form-group">
            {{Form::label('location', 'Location')}}
            {{Form::text('location', $post->location, ['class'=> 'form-control', 'placeholder' => 'Location'])}}

    </div>

    {{--  <div class="form-group">
        {{Form::label('body', 'Body')}}
        {{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
    </div>  --}}
    {{Form::hidden('_method', 'PUT')}}
    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}

        {!! Form::close() !!}

@endsection
