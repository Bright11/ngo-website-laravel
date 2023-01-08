@extends('frontend.master')
@push('icon')
<link rel="stylesheet" href="{{asset("css/indexcss.css")}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


@endpush
@section('content')
<div class="blogpage">
  <div class="blogcategory-holder">
    <ul class="blogcatul">
      @forelse ($blogcat as $c)
      <li><a href="/getblogcat/{{$c->id}}">{{$c->title}}</a></li>
      @empty
          
      @endforelse
      
    </ul>
  </div>
  <div class="blogcontent-holder">
    <div class="blog-holder">
      @forelse ($getallblogcat as $c)
      <div class="blog-img">
        <a href="/blogdetails/{{$c->id}}">
        <img src="{{asset('blog/'.$c->image)}}" alt="{{$c->blogtitle}}"/>
        
        <div class="blog-info">
         <h1> {{$c->blogtitle}}</h1>
          <p>{!!Str::limit($c->bloginfo,50,$end="")!!}<a href='/blogdetails/{{$c->id}}' class='readmore'> Read More...</a></p>

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