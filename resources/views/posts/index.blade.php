@extends('layouts.app')

@section('content')

<div class="container">

                <div class="col">
                <div class="card">
                    <div class="card-header text-center">
<div class="card-body">
    <h3> Job Listings</h3>
</div>
                    </div>
    @if(count($posts) > 0)
    <table class="table">

        <thead class="thead-light">
            <th>Title</th>
            <th>Location</th>

            <th>Posted Date</th>
        </thead>
        @foreach($posts as $post)
            <tr >
                <td><a href="/posts/{{$post->id}}"> <b>{{$post->title}}</b> <br>  </a>{{$post->compName}} <br> <span class="text-danger "> *{{$post->type}}</span> </td>
                <td>{{$post->location}}</td>

                <td>{{$post->created_at}}</td>

            </tr>


        @endforeach

    @else
        <p> You have no post </p>
    </table>

    @endif
    <div class="text-center">
       {{$posts->links()}}
    </div>

<div>
</div>

 </div>

</div>

            </div></div>



        </div>


@endsection


