@extends('admin.admin')

@section('content')
@include('admin.adminheader')
<div class="admin--content-dashboard">
  
    @include('admin.adminsidbar')
    <div class="admin-main-content">
        <li><a href="/addsponsorform">Add Sponsorship</a></li>
        <div class="event-table">
            <table class="table">
                <thead>
                  <tr>
                   
                    <th scope="col">Company Name</th>
                    <th scope="col">Location</th>
                    <th scope="col">Logo</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse ($seesponsor as $s)
                  <tr>
                    
                    <td>{{$s->company_name}}</td>
                    <td>{{$s->company_location}}</td>
                    <td><img src="{{asset("sponsor/" .$s->company_logo)}}" alt="{{$s->company_name}}"/></td>
                    <td><a href="/deletcompany/{{$s->id}}" class="admin-delete">Delete</a></td>
                  </tr>
                  @empty
                      
                  @endforelse
                  
                  
                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection