@extends('admin.admin')

@section('content')
@include('admin.adminheader')
<div class="admin--content-dashboard">

    @include('admin.adminsidbar')
    <div class="admin-main-content">
        <li><a href="/abouusform">Add About us</a></li>
        <div class="event-table">
            <table class="table">
                <thead>
                  <tr>

                    <th scope="col">Title</th>
                    <th scope="col">About us</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse ($about as $ab)
                  <tr>
                    <th>{{$ab->title}}</th>
                    <td>{!!$ab->about!!}</td>
                    <td><a href="/editabout/{{$ab->id}}"class="admin-edit">Edit</a></td>
                    <td><a href="/deletabout/{{$ab->id}}"class="admin-delete">Delete</a></td>
                  </tr>
                  @empty

                  @endforelse


                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection
