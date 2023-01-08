@extends('frontend.master')
@push('icon')
<link rel="stylesheet" href="{{asset("css/indexcss.css")}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="{{asset(" /owl/owl.carousel.min.css")}}">
<link rel="stylesheet" href="{{asset(" /owl/owl.theme.default.min.css")}}">
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

@endpush
@section('content')

<div class="container videocontainer mt-5 mb-5">
    <div class="row ml-5">

        @forelse ($video as $v)
            <div class="col-6 col-md-4 video-row mb-5">
                <div class="vidoe-holderplayer">
                    {!!$v->video!!}
                </div>
                <h1>{{$v->title}}</h1>
            </div>
        @empty

        @endforelse
    </div>
</div>
@endsection
@push('js')

@endpush
