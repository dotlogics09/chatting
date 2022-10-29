@extends('layouts.master')
@section('title', 'Change Password')
@section('content')

@if (Session::has('successMessage'))
<div class="container-fluid hidediv">
    <div class="card card-style">
        <div class="card-body">
            <div class="alert alert-success">{{ session::get('successMessage') }}</div>
        </div>
    </div>
</div>
@endif
@if (Session::has('errorMessage'))
<div class="container-fluid hidediv">
    <div class="card card-style">
        <div class="card-body">
            <div class="alert alert-danger">{{ session::get('errorMessage') }}</div>
        </div>
    </div>
</div>
@endif

<form action="{{url('update_profile')}}" method="post" enctype="multipart/form-data" style="text-align: center; margin-top: 30px;">
    @csrf
    <img src="{{asset('uploads/profile_images')}}/{{$show_profile->profile_img}}" alt="{{$show_profile->first_name}}" style="height: 50px; width: 50px;">
    <br>
    <br>
    <input type="hidden" name="id" value="{{session('id')}}">

    <input type="text" name="first_name" value="{{$show_profile->first_name}}" placeholder="First Name">
    <br>
    <br>
    @if ($errors->has('first_name'))
    <span class="text-danger errorsignup">{{ $errors->first('first_name') }}</span>
    @endif

    <input type="text" name="last_name" value="{{$show_profile->last_name}}" placeholder="Last Name">
    <br>
    <br>
    @if ($errors->has('last_name'))
    <span class="text-danger errorsignup">{{ $errors->first('last_name') }}</span>
    @endif

    <input type="text" name="username" value="{{$show_profile->username}}" placeholder="User Name">
    <br>
    <br>
    @if ($errors->has('username'))
    <span class="text-danger errorsignup">{{ $errors->first('username') }}</span>
    @endif

    <input type="email" name="email" value="{{$show_profile->email}}" placeholder="Email">
    <br>
    <br>
    @if ($errors->has('email'))
    <span class="text-danger errorsignup">{{ $errors->first('email') }}</span>
    @endif

    <input type="text" name="phone" value="{{$show_profile->phone}}" placeholder="Phone Number">
    <br>
    <br>
    @if ($errors->has('phone'))
    <span class="text-danger errorsignup">{{ $errors->first('phone') }}</span>
    @endif

    <input type="file" name="profile_img" value="{{$show_profile->profile_img}}">
    <br>
    <br>

    <input type="submit" value="Submit">
</form>
@endsection