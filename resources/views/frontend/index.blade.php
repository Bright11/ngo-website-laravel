@extends('frontend.master')
@push('icon')
<link rel="stylesheet" href="{{asset("css/indexcss.css")}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="{{asset("/owl/owl.carousel.min.css")}}">
<link rel="stylesheet" href="{{asset("/owl/owl.theme.default.min.css")}}">
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
@endpush
@section('content')
<section class="top-slider">
  <div class="mytopslide"data-aos="fade-down">
    @include('frontend.top_slider')
  </div>
</section>
<section class="mission_secion">
    <div class="mission-holder">
        {{-- <div class="profile">
           <h1>Business profile</h1>
            <div class="our-profile-content">
               <p>New life regeneration foundation is a nonprofit organization that seek to bring solutions to persons with drug addiction
            through education,counseling and faith-based holistic methods together with regeneration and rehabilitation.</p>
            </div>
        </div> --}}
        <div class="mission">
           <h1>Our Mission</h1>
            <div class="mission-content">
               <p>
                To become a one-stop help center for drug addiction.💊❌
               </p>

            </div>
        </div>
        <div class="vission">
            <h1>Our Vision</h1>
            <div class="vision-holder">
                <p>To create a world of second chance for the down trodden and build healthy and more sanitized societies through education
                and regeneration.</p>
            </div>
        </div>
    </div>
</section>
{{-- <section class="Ourcauses">
<div class="container Ourcausesindex">
    <h1>Our <b>Causes</b></h1>
    <div class="row row">
        @forelse ($causestable as $c)
            <div class="col-lg-3 col-md-4 col-xs-12 col-sm-6 mb-3 me-2 Ourcauses_holderitem" data-aos="fade-up">
           <div class="cause_img">

            <img src="{{asset('causeimg/'.$c->image)}}" alt="">
            <h2 style="font-size: 20px;font-weight: 600;">{{$c->name}}</h2>
           </div>
           <p>{!!Str::limit($c->description,50,$end="")!!}<a href='/details/{{$c->id}}' class='readmore'> Read More...</a>
            </p>
            </div>
        @empty

        @endforelse


    </div>
</div>
</section> --}}
<section>
    <div class="conatiner-fluid banner" style="background-image: url({{asset('logo/logo.jpeg')}})">
        <h1>Helping the young once overcome impossibilities</h1>
    </div>
</section>
<section class="event d-flex align-items-center">
<div class="container ">
    <div class="row">
        <div class="col-lg-3 col-md-4 col-xs-6 col-sm-6 mb-3 me-2  eventl" data-aos="fade-up">

            <div class="my-letest-event_holder">
              <div>
                @if($event===true)
                    <h2>Current Event</h2>
                @endif
              </div>
            @forelse ($event as $lv)
            <a href="/viewevent/{{$lv->id}}" class="eventlink">
            <div class="my-letest-event">

                <div class="my-letest-eventimg">
                    <img src="{{asset('event/'.$lv->event_img)}}" alt="">
                  <div class="eventl_info">
                    <h1>{{$lv->event_name}}</h1>
                    <p>{{$lv->event_date}}&nbsp; {{$lv->event_time}}{{$lv->settime}}</p>

                  </div>
                </div>

                </div>
                </a>
            @empty

            @endforelse
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-2 col-sm-6 mb-3 me-2 allevent" data-aos="fade-up">

            <div class="alleventslider eventslid owl-carousel">

              @forelse ($allevent as $alle)
            <a href="/viewevent/{{$alle->id}}" class="eventlink">
                <div class="eventslid-content">
                    <h2><b>Our Events</b></h2>
                    <img src="{{asset('event/'.$alle->event_img)}}" alt="">
                    <h1>{{$alle->event_name}}</h1>
                </div>
            </a>
              @empty

              @endforelse
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6 col-sm-6 mb-3 me-2 e  donaterow" data-aos="fade-up"style="background-image: url({{asset('logo/logo.jpeg')}})" >
            <h1>Help us to fight drug abuse</h1>
        <div class="payindex " >
            @include('frontend.pay')
        </div>
        </div>
    </div>
</div>
</section>

<section class="gallery">
    <p>Our Galleries</p>
  <div class=" owl-carousel gallery-slide">
    @forelse ($getgallery as $g)

        <div class="our-galery sideindexes ">
            <img src="{{asset('gallery/'.$g->image)}}" alt="">
            <p style="font-size: 12px;font-weight: 600;">{{$g->title}}</p>
        </div>
<style>
    p{
        font-size: 12px;
        font-weight: 600;
    }
</style>
    @empty

    @endforelse

</div>
<div class="viewall_gallery">
    <a href="/ourgallery">View all</a>
</div>
</section>


<section class="sponsors">
    <p>Our Patiners</p>
    <div class=" owl-carousel voluteers-slide">
        @forelse ($sponsor as $s)
        <a href="{{$s->company_website}}" class="eventlink">
            <div class="our-galery sideindexes">
                <img src="{{asset('sponsor/'.$s->company_logo)}}" alt="">
                <h2>{{$s->company_name}}</h2>
            </div>
        </a>
        @empty

        @endforelse
    </div>
</section>
@endsection
@push('js')
<script src="{{asset("js/jquery.js")}}"></script>
<script src="{{asset("owl/owl.carousel.min.js")}}"></script>
<script src="{{asset("owl/myowl.js")}}"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
@endpush
