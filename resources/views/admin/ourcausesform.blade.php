@extends('admin.admin')

@section('content')
@include('admin.adminheader')
<div class="admin--content-dashboard">
  
    @include('admin.adminsidbar')
    <div class="admin-main-content">
       
       
            <li><a href="/ourcauses">Back to Our Causes</a></li>
       
            <form class="formadmin" action="/ourcausettodb" method="post" enctype="multipart/form-data">
                @csrf
                <label>Causes Name</label>
                <input type="text" placeholder="Name" name="name">
                <label>Image</label>
                <input type="file" name="image" >
                
                <label>Causes Description</label>
                <textarea placeholder="Description" name="description" id="description"></textarea>
                <button>Save</button>
            </form>
            
        </div>
    </div>
 
@endsection

@push('custom-scripts')
<script src="https://cdn.ckeditor.com/ckeditor5/35.2.1/classic/ckeditor.js"></script>
<script src="{{asset("js/ckeditor.js")}}"></script>
@endpush