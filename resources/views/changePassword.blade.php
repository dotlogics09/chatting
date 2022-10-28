@extends('layouts.master')
@section('title', 'Change Password')
@section('content')
<form action="{{url('changePassword')}}" method="post" style="text-align: center; margin-top: 30px;">
    @csrf
    <input type="hidden" name="id" value="{{session('id')}}">
    <input type="text" name="old_password" placeholder="Old Password">
    <br>
    <br>
    @if ($errors->has('old_password'))
    <span class="text-danger errorsignup">{{ $errors->first('old_password') }}</span>
    @endif
    <input type="password" name="new_password" placeholder="New Password">
    <br>
    <br>
    @if ($errors->has('new_password'))
    <span class="text-danger errorsignup">{{ $errors->first('new_password') }}</span>
    @endif
    <input type="password" name="confirm_password" placeholder="Confirm Password">
    <br>
    <br>
    @if ($errors->has('confirm_password'))
    <span class="text-danger errorsignup">{{ $errors->first('confirm_password') }}</span>
    @endif

    <input type="submit" value="Submit">
</form>
@endsection