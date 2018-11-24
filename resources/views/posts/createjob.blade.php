@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-9">
        <div class="card">
            <div class="card-header text-center ">
                <h1> Post Job</h1>
            </div>
            <br><b>
            {!! Form::open(['action' => 'CVController@store', 'method' => 'POST']) !!}
            <div class="form-group">
                    {{Form::label('title', 'Title')}}
                    {{Form::text('title', '', ['class'=> 'form-control font-weight-bold', 'placeholder' => 'Title'])}}

            </div>

            <div class="form-group">
                    {{Form::label('description', 'Description')}}
                    {{Form::textarea('description', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Description'])}}
                </div>


            <div class="form-group">
                    {{Form::label('salary', 'Salary')}}
                    {{Form::text('salary', '', ['class'=> 'form-control', 'placeholder' => 'Salary'])}}

            </div>


            <div class="form-group">
                    {{Form::label('type', 'Type')}}
                    {{Form::text('type', '', ['class'=> 'form-control', 'placeholder' => 'Type'])}}

            </div>

            <div class="form-group">
                    {{Form::label('skills', 'Skills')}}
                    {{Form::text('skills', '', ['class'=> 'form-control', 'placeholder' => 'Skills'])}}


            </div>

            <div class="form-group">
                    {{Form::label('compName', 'Company Name')}}
                    {{Form::text('compName', '', ['class'=> 'form-control', 'placeholder' => 'Company Name'])}}

            </div>

            <div class="form-group">
                    {{Form::label('compDescription', 'Company Description')}}
                    {{Form::text('compDescription', '', ['class'=> 'form-control', 'placeholder' => 'Company Description'])}}

            </div>

            <div class="form-group">
                    {{Form::label('location', 'Location')}}
                    {{Form::text('location', '', ['class'=> 'form-control', 'placeholder' => 'Location'])}}
            </div>

            <div class="form-group">
                    {{Form::date('date', \Carbon\Carbon::now())}}

            </div>
            {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
            {!! Form::close() !!}</b>
            </div>
        </div>
    </div>
</div>
@endsection
