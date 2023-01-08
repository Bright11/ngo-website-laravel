@extends('admin.admin')

@section('content')
@include('admin.adminheader')
<div class="admin--content-dashboard">
  
    @include('admin.adminsidbar')
    <div class="admin-main-content">
        <li><a href="/galleryform">Add Gallery</a></li>
        <div class="event-table">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nmae</th>
                    <th scope="col">Location</th>
                    <th scope="col">Logo</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
             
                <tbody>
                
                  @forelse ($g as $g)
                  
                  <tr>
                  
                    <td>{{$g->title}}</td>
                    <td><img src="{{asset("gallery/".$g->image)}}" alt="{{$g->title}}"/></td>
                    
                    <td><a href="/deletgallery/{{$g->id}}" class="admin-delete">Delete</a></td>
                  
                  </tr>
                 
                  @empty
                  
                  @endforelse
                  
                  
                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection