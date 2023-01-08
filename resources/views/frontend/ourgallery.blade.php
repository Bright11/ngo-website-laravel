@extends('frontend.master')
@push('icon')
<link rel="stylesheet" href="{{asset("css/indexcss.css")}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


@endpush
@section('content')
<div class="gallerypage">
 <style>
    .gallery-info h1{
        text-align: center;
        font-size: 20px;
        font-weight: 500;
        width: 100%;
        margin-top: 10px;
        padding: 0px 8px;
        text-transform:capitalize;
    }
 </style>
    <div class="gallery-holder">
      @forelse ($gallery as $g)
      <div class="gallery-img">

        <img src="{{asset('gallery/'.$g->image)}}" alt="{{$g->tltel}}"/>

        <div class="gallery-info">
         <h1> {{$g->title}}</h1>

        </div>

      </div>
      @empty

      @endforelse
    </div>

</div>
@endsection
@push('js')

@endpush
