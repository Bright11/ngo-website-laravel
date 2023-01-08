@extends('frontend.master')
@push('icon')
<link rel="stylesheet" href="{{asset("css/indexcss.css")}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

{{-- <link rel="stylesheet" href="{{asset("/owl/owl.carousel.min.css")}}">
<link rel="stylesheet" href="{{asset("/owl/owl.theme.default.min.css")}}"> --}}
@endpush

@section('content')
<div class="about-us-container">
@forelse ($about as $b)
   <div class="aboutdiv">
    <h1>{{$b->title}}</h1>
    <p>{!!$b->about!!}</p>
   </div>
@empty

@endforelse
</div>
@endsection
{{-- @push('js')
<script src="{{asset("js/jquery.js")}}"></script>
<script src="{{asset("owl/owl.carousel.min.js")}}"></script>
<script src="{{asset("owl/myowl.js")}}"></script>
@endpush --}}
