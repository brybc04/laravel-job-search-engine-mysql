@extends('layouts.app')

@section('content')
<div class="container ">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center">
                   <h2> <b>{{$posts->title}}</b></h2>
                </div>

                @auth
                <div class="text-center">
                    <button type="button" data-toggle="modal" data-target="#exampleModal"class="btn btn-danger btn-lg">Apply Now</button>
                    <a class="btn btn-primary btn-lg" href="/posts" role="button">Go Back</a>
                </div>
                @endauth

                @guest
                <div class="text-center">
                        <a class="btn btn-danger btn-lg" href="/login" role="button">Login to Apply</a>
                        <a class="btn btn-primary btn-lg" href="/posts" role="button">Go Back</a>
                    </div>
                @endguest


                <div class="card-body">
                    <p><b>Location</b> <br>{{$posts->location}}</p>
                    <p><b>Description</b> <br>{!!$posts->description!!}</p>
                    <p><b>Salary</b> <br>{{$posts->salary}}</p>
                    <p><b>Type</b> <br>{{$posts->type}}</p>
                    <p><b>Skills</b> <br>{{$posts->skills}}</p>
                    <p><b>Company</b> <br>{{$posts->compName}} <br>
                    <p><b>Company Description</b> <br> {{$posts->compDescription}}</p>
                    <p><b>Posted Date</b> <br>{{$posts->created_at}}</p>
                    <p><b>End Date</b> <br>{{$posts->date}}</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <div class="modal-title h2" id="exampleModalLabel"> {{$posts->title}} <br>
                    <span class="h5">{{$posts->location}}</span>
              </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            @auth
            <div class="modal-body">
                <p><b>Name:</b>  {{ Auth::user()->name }} </p>
                <p><b>Email: </b>   {{ Auth::user()->email }}</p>
                <p class="text-danger">**make sure your CV is updated!

                </p>
                <b>Phone Number: </b> <input type=" text" class="form-control"  placeholder="Optional">

                <b> Message to Employer: </b> <textarea class="form-control" rows="5" placeholder="Optional"></textarea>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-success" data-dismiss="modal">Submit</button>
            </div>
            @endauth
        </div>
    </div>
 </div>
</div>

@endsection

