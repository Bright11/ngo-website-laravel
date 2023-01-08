@extends('admin.admin')

@section('content')
@include('admin.adminheader')
<div class="admin--content-dashboard">
  
    @include('admin.adminsidbar')
    <div class="admin-main-content">
       
       <div class="blogform-flex">
        
        <li><a href="/blogtable">Back to Blog</a></li>
        <li><a href="/blogtable">Add Category</a></li>
       </div>
       
            <form class="formadmin" action="/insertblog" method="post" enctype="multipart/form-data">
                @csrf
                <label>Blog title</label>
                <input type="text" placeholder="Blog Tile" name="blogtitle">
                
                <label>Category</label>
                <select name="cat_id">
                    <option selected>Choose Category</option>
                    @forelse ($cat as $c)
                        <option value="{{$c->id}}">{{$c->title}}</option>
                    @empty
                        
                    @endforelse

                </select>
                <label>Blog Image<small>Optional</small></label>
                <input type="file" name="image">
                <label>Blog Details</label>
                <textarea placeholder="Blog Information" name="bloginfo" id="bloginfo"></textarea>
                <button>Save</button>
            </form>
            
        </div>
    </div>
 
@endsection

@push('custom-scripts')
<script src="https://cdn.ckeditor.com/ckeditor5/35.2.1/classic/ckeditor.js"></script>
<script src="{{asset("js/ckeditor.js")}}"></script>
@endpush