@extends('frontend.master')
@push('icon')
<link rel="stylesheet" href="{{asset("css/indexcss.css")}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


@endpush
@section('content')
<div class="login">
  <form action="insertregisterngo" method="POST">
    @csrf
    <label for="">Rgisteration Code</label>
    <input type="text" placeholder="Code" name="code">
    <label for="">User Name</label>
    <input type="text" placeholder="User Name" name="name"/>
    <label>Email</label>
    <input type="email" name="email" placeholder="email">
    <label for="">Password</label>
    <input type="password" placeholder="********" name="password">
    <label for="">Confirm Password</label>
    <input type="password" placeholder="********" name="confirmpassword">
    <input type="submit" class="login-btn" value="Register">
  </form>
</div>
@endsection
@push('js')

@endpush