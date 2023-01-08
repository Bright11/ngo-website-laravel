@extends('frontend.master')
@push('icon')
<link rel="stylesheet" href="{{asset("css/indexcss.css")}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


@endpush
@section('content')
<div class="login">
  <form action="insertlogin" method="POST">
    @csrf
    <label for="">Login Code</label>
    <input type="text" placeholder="Code" name="code">
    <label>Email</label>
  <input type="email" name="email" placeholder="email">
  <label for="">Password</label>
  <input type="password" placeholder="********" name="password">
  <input type="submit" class="login-btn" value="Login">
  </form>
</div>
@endsection
@push('js')

@endpush