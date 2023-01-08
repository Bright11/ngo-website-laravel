@extends('admin.admin')

@section('content')
@include('admin.adminheader')
<div class="admin--content-dashboard">
  
    @include('admin.adminsidbar')
    <div class="admin-main-content">
        <li><a href="/addeventform">Add Event</a></li>
        <div class="event-table">
            <table class="table">
                <thead>
                  <tr>
                    
                    <th scope="col">Event Name</th>
                    <th scope="col">Photo</th>
                    <th scope="col">Location</th>
                    <th scope="col">Date</th>
                    <th scope="col">Time</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @forelse ($eventtable as  $e)
                    <tr>
                       
                        <td>{{$e->event_name}}</td>
                        <td> <img src="{{asset('event/'.$e->event_img)}}" alt=""/></td>
                        <td>{{$e->event_location}}</td>
                        <td>{{$e->event_date}}</td>
                        <td>{{$e->event_time}}&nbsp;{{$e->settime}}</td>
                        <td><a href="/deleteevnt/{{$e->id}}" class="admin-delete">Delete</a></td>
                      </tr>
                    @empty
                        
                    @endforelse
                  
                  
                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection