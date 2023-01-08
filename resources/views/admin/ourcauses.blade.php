@extends('admin.admin')

@section('content')
@include('admin.adminheader')
<div class="admin--content-dashboard">
  
    @include('admin.adminsidbar')
    <div class="admin-main-content">
        <li><a href="/ourcausesform">Add Causes</a></li>
        <div class="event-table">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col"> Name</th>
                    <th scope="col">Image</th>
                   
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse ($ourc as $c)
                  <tr>
                    <th scope="row">1</th>
                    <td>{{$c->name}}</td>
                  
                    <td><img src="{{asset("causeimg/" .$c->image)}}" alt="{{$c->name}}"/></td>
                    <td><a href="/deletcause/{{$c->id}}"class="admin-delete">Delete</a></td>
                  </tr>
                  @empty
                      
                  @endforelse
                  
                  
                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection