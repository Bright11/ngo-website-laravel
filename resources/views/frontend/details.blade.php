@extends('frontend.master')
@push('icon')
<link rel="stylesheet" href="{{asset(" css/indexcss.css")}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


@endpush
@section('content')
<div class="container details-page">
    <div class="details">
        <img src="{{asset("causeimg/" .$causesd->image)}}" alt="{{$causesd->name}}"/>
        <h1>{{$causesd->name}}</h1>
    </div>
    <div class="eventinfo">

        <div class="infortext">
            <p>{!!$causesd->description!!}</p>
        </div>
    </div>
</div>
@endsection
@push('js')

@endpush
