@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center ">
<form method="post" action="{{ route('users.edit', $user) }}">
        {{ csrf_field() }}
        {{ method_field('patch') }}

        <h2> Edit Profile</h2>
</div>
        <div class="form-group">
        Name: <input type="text" name="name" class="form-control col-10" value="{{ $user->name }}" />
        </div>
        Email:
        <div class="form-group">
        <input type="email" name="email" class="form-control col-10"   value="{{ $user->email }}" />
         </div>
        <div class="form-group">
        <input type="password" name="password" class="form-control col-10" placeholder=" new password" />
        </div>
        <div class="form-group">

        <input type="password" class="form-control col-10" name="password_confirmation" placeholder="confirm new password" />
    </div>

        <button class="btn btn-primary col-2" type="submit">Send</button>
<br>
    </form>
@endsection

