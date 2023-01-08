@extends('frontend.master')
@push('icon')
<link rel="stylesheet" href="{{asset("css/indexcss.css")}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


@endpush
@section('content')
<div class="container details-page">
    <div class="details">
       <img src="{{asset("blog/" .$blogdetails->image)}}" alt="{{$blogdetails->blogtitle}}"/>
      <h1>{{$blogdetails->blogtitle}}</h1>

    </div>
    <div class="eventinfo">

        <div class="infortext">
            <p>{!!$blogdetails->bloginfo!!}</p>
        </div>
    </div>
</div>
@endsection
@push('js')

@endpush



