@extends('frontend.master')
@push('icon')
<link rel="stylesheet" href="{{asset("css/indexcss.css")}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


@endpush
@section('content')
<div class="container-fluid blogpage">

  <div class="blogcategory-holder">
    <ul class="blogcatul">
      @forelse ($blogcat as $c)
      <li><a href="/getblogcat/{{$c->id}}">{{$c->title}}</a></li>
      @empty

      @endforelse

    </ul>
  </div>
  <div class="blogcontent-holder">

   <div class="blog">
      @forelse ($blog as $b)
      <div class="blog-img">
        <a href="/blogdetails/{{$b->id}}">
        <img src="{{asset('blog/'.$b->image)}}" alt="{{$b->blogtitle}}"/>

        <div class="blog-info">
<h1> {{$b->blogtitle}}</h1>
          <p>{!!Str::limit($b->bloginfo,50,$end="")!!}<a href='/blogdetails/{{$b->id}}' class='readmore'> Read More...</a></p>

        </div>
      </a>
      </div>
      @empty

      @endforelse
    </div>
  </div>
</div>
@endsection
@push('js')

@endpush
