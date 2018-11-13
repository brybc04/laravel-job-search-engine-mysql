@extends('layouts.app')

@section('content')
<style>
        .icon-button {
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            outline: none;
            border: 0;
            background: transparent;
        }
        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            font-family: 'Nunito', sans-serif;
            background-color: white;
            color: #636b6f;
            text-align: center;
         }




    </style>
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
     <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header h3"> <b>Your Profile </b>
                    <a  href="/users/{user_id}" role="button"> <i class='fas float-right h4 icon-button '> &#xf304; </i> </a>
                </div>

                    <div class="card-body">
                        <p>  {{ Auth::user()->name }} </p>
                        <p>    {{ Auth::user()->email }}</p>
                        {{--  Edit Profile  --}}
<div class="modal" tabindex="-1" role="dialog" id="editModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title"> <b>Update Your CV</b></h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        {{--  <div class="modal-body">
            {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST']) !!}
            <div class="form-group">
                {{Form::label('mainSkills', 'Main Skills')}}
                {{Form::text('mainSkills', $post->mainSkills, ['class'=> 'form-control', 'placeholder' => 'Main Skills'])}}

            </div>

            <div class="form-group">
            {{Form::label('workExperience', 'Work Experience')}}
                    {{Form::textarea('workExperience', $post->workExperience, ['class'=> 'form-control', 'placeholder' => 'Work Experience'])}}

                </div>

                <div class="form-group">
                        {{Form::label('education', 'Education')}}
                        {{Form::text('education', $post->education, ['class'=> 'form-control', 'placeholder' => 'Education'])}}

                    </div>


            {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}

                {!! Form::close() !!}  --}}
        </div>
        </div>
    </div>

                    </div>

                 <div>
            </div>
        </div>

            <br>
        <div class="card">
                <div class="card-header h3">
                    <b> Your CV </b>

                   <button class='fas float-right icon-button h5'
                   data-toggle="modal"
                   data-target="#addModal"
                   type="button"
                   name="button">  <i class="text-primary"> &#xf304; </i> </button>
                    </div>









                @if(count($posts) > 0)

                <div class="card-body">
                        @foreach ($posts as $post)

                  <p><b> Main Skills</b> <br>{{$post->mainSkills}} </p>
                   <p> <b>Work Experience</b> <br> {{$post->workExperience}}</p>
                   <p><b>Education</b> <br>{{$post->education}}</p>







                  <div class="modal" tabindex="-1" role="dialog" id="addModal">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title"> <b>Update Your CV</b></h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                                {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST']) !!}
                                <div class="form-group">
                                    {{Form::label('mainSkills', 'Main Skills')}}
                                    {{Form::text('mainSkills', $post->mainSkills, ['class'=> 'form-control', 'placeholder' => 'Main Skills'])}}

                                </div>

                                <div class="form-group">
                                {{Form::label('workExperience', 'Work Experience')}}
                                        {{Form::textarea('workExperience', $post->workExperience, ['class'=> 'form-control', 'placeholder' => 'Work Experience'])}}

                                    </div>

                                    <div class="form-group">
                                            {{Form::label('education', 'Education')}}
                                            {{Form::text('education', $post->education, ['class'=> 'form-control', 'placeholder' => 'Education'])}}

                                        </div>


                                {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}

                                    {!! Form::close() !!}
                            </div>
                          </div>
                        </div>

                   @endforeach

                   @else
                    <p>  </p>
                    <p class=" text-center"><a class="btn btn-primary" href="/createcv" role="button">Create Your CV </a></p>
                    <br>
                </div>
                <div>
                        @endif
                </div>
            </div>
        </div>
    </div>
    </div>
</div>

<div class="footer">


                <hr>

                      <p><b>Find us on social media.</b></p>

                      <p>
                         <a href="http://www.facebook.com"> <i style="font-size:24px; color:black; margin-right: 5px; " class="fa">&#xf082;</i> </a>
                          <a href="http://www.instagram.com"><i style="font-size:24px; color:black; margin-right: 5px; " class="fa">&#xf16d;</i> </a>
                          <a href="http://www.twitter.com"> <i style="font-size:24px; color:black; margin-right: 5px; " class="fa">&#xf099;</i> </a>
                          <a href="http://www.snapchat.com"><i style="font-size:24px; color:black; margin-right: 5px; " class="fa">&#xf2ad;</i> </a>
                          <a href="http://www.wordpress.com"><i style="font-size:24px; color:black; margin-right: 5px; " class="fa">&#xf19a;</i> </a>
                      </p>   <p class="float-left"> Copyright 2018 www.mycvonline.com </p>
                      <p class="float-right"> About | Services | Contacts</p>


              </div>

          </div>
    </div>


@endsection


