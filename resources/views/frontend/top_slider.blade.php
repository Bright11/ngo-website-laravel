<div class="owl-carousel topslider owl-theme" >
    @forelse ($allevent as $e)
  <div class="topslid-holder" >
    <img src="{{asset('event/'.$e->event_img)}}" alt=""/>
   <div class="topslide-info">
    
    @if($e->event_date>$today)
        <p>Latest Event</p>
        <p>{{$e->event_name}}</p>
        <p>{{$e->event_date}} &nbsp;{{$e->event_time}} {{$e->settime}}</p>
        @else
    <p>Pass Event</p>
    <p>{{$e->event_name}}</p>
    @endif
  <a href="/viewevent/{{$e->id}}">Read More...</a>
   </div>
  </div>
    @empty
        
    @endforelse
    {{-- <div class="item"><h4>1</h4></div>
    <div class="item"><h4>2</h4></div>
    <div class="item"><h4>3</h4></div>
    <div class="item"><h4>4</h4></div>
    <div class="item"><h4>5</h4></div>
    <div class="item"><h4>6</h4></div>
    <div class="item"><h4>7</h4></div>
    <div class="item"><h4>8</h4></div>
    <div class="item"><h4>9</h4></div>
    <div class="item"><h4>10</h4></div>
    <div class="item"><h4>11</h4></div>
    <div class="item"><h4>12</h4></div> --}}
</div>