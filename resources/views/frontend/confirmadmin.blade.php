@extends('frontend.master')
@push('icon')
<link rel="stylesheet" href="{{asset("css/indexcss.css")}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


@endpush
@section('content')
<div class="login">
  <form action="checkadmin" method="POST">
    @csrf
    
  <label for="">Code</label>
  <input type="text" placeholder="Code" name="code">
  <input type="submit" class="login-btn" value="Confirm">
  </form>
</div>
@endsection
@push('js')

@endpush