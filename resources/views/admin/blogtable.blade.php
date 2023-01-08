@extends('admin.admin')

@section('content')
@include('admin.adminheader')
<div class="admin--content-dashboard">

  @include('admin.adminsidbar')
  <div class="admin-main-content">
    <div class="blogform-flex">
      <li><a href="/blogform">Add Blog</a></li>
      <li><a href="/blogcategory">Add Category</a></li>
    </div>
    <div class="event-table">
      <table class="table">
        <thead>
          <tr>

            <th scope="col">Blog Name</th>

            <th scope="col">image</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @forelse ($blog as $blog)
          <tr>

            <td>{{$blog->blogtitle}}</td>
            <td><img src="{{asset("blog/".$blog->image)}}" alt="{{$blog->blogtitle}}"/></td>
            <td><a href="/deletblog/{{$blog->id}}" class="admin-delete">Delete</a></td>

          </tr>
          @empty

          @endforelse


        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection