@extends('admin.admin')

@section('content')
@include('admin.adminheader')
<div class="admin--content-dashboard">
  
    @include('admin.adminsidbar')
    <div class="admin-main-content">
        <div class="blogform-flex">
        <li><a href="/sitedescription">Add site description</a></li>
        <li><a href="/sitekeywords">Add site keywords</a></li>
    </div>
        <div class="event-table">
            <table class="table">
                <thead >
                  <tr >
                  
                    <th scope="col">Name</th>
                    
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody >
                  {{-- @forelse ($cat as $c)
                  <tr >
                  <td>{{$c->title}}</td>
                  <td><a href="/editcat/{{$c->id}}" class="admin-delete">Edite</a></td>
                 
                  </tr>
                  @empty
                      
                  @endforelse --}}
                  
                  
                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection