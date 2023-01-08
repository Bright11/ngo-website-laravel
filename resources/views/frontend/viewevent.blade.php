@extends('frontend.master')
@push('icon')
<link rel="stylesheet" href="{{asset("css/indexcss.css")}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


@endpush
@section('content')
<div class="container details-page">
  <div class="details">
    <img src="{{asset("event/" .$seeevent->event_img)}}" alt="{{$seeevent->event_name}}"/>
    <h1>{{$seeevent->event_name}}</h1>

  </div>
   <div class="eventinfo">
    <p>Location &nbsp;{!!$seeevent->event_location!!}</p>
    <div class="event-date">
    <p>Event Date &nbsp;{{$seeevent->event_date}}</p>
    <p>Event Time&nbsp;{{$seeevent->event_time}}&nbsp;{{$seeevent->settime}}</p>

    </div>
   <div class="infortext">
    <p>{!!$seeevent->event_info!!}</p>
   </div>
   </div>
</div>
@endsection
@push('js')

@endpush
