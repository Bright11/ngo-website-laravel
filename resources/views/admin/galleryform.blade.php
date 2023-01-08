@extends('admin.admin')

@section('content')
@include('admin.adminheader')
<div class="admin--content-dashboard">
  
    @include('admin.adminsidbar')
    <div class="admin-main-content">
       
     
        <li><a href="/admingallery">Back To Gallery</a></li>
       
       
            <form class="formadmin" action="/insertgallery" method="post" enctype="multipart/form-data">
                @csrf
                <label> title</label>
                <input type="text" placeholder="Title" name="title">
                <label> Image</label>
                <input type="file" name="image">
                <button>Save</button>
            </form>
            
        </div>
    </div>
 
@endsection

@push('custom-scripts')
<script src="https://cdn.ckeditor.com/ckeditor5/35.2.1/classic/ckeditor.js"></script>
<script src="{{asset("js/ckeditor.js")}}"></script>
@endpush