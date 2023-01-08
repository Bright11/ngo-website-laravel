@extends('admin.admin')

@section('content')
@include('admin.adminheader')
<div class="admin--content-dashboard">
  
    @include('admin.adminsidbar')
    <div class="admin-main-content">
       
       <div class="blogform-flex">
        
        <li><a href="/blogcategorytable">Back to Category</a></li>
        <li><a href="/blogtable">Add Blog</a></li>
       </div>
       
            <form class="formadmin" action="/addcategorytodb" method="post">
                @csrf
                <label>Category title</label>
                <input type="text" placeholder="Category Tile" name="title">
                
                <button>Save</button>
            </form>
            
        </div>
    </div>
 
@endsection

@push('custom-scripts')
<script src="https://cdn.ckeditor.com/ckeditor5/35.2.1/classic/ckeditor.js"></script>
<script src="{{asset("js/ckeditor.js")}}"></script>
@endpush