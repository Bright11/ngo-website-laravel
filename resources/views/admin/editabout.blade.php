@extends('admin.admin')

@section('content')
@include('admin.adminheader')
<div class="admin--content-dashboard">
  
    @include('admin.adminsidbar')
    <div class="admin-main-content">
       
       
            <li><a href="/admin_aboutus">Back to About Us</a></li>
       
            <form class="formadmin" action="/inserteditaboutu/{{$editabout->id}}" method="post">
                @method('put')
                @csrf
                <label>About Us Details <small>Optional</small></label>
                <input type="text" name="title" value="{{$editabout->title}}">
                <textarea  name="about" id="about">{!!$editabout->about!!}</textarea>
                <button>Save</button>
            </form>
            
        </div>
    </div>
 
@endsection

@push('custom-scripts')
<script src="https://cdn.ckeditor.com/ckeditor5/35.2.1/classic/ckeditor.js"></script>
<script src="{{asset("js/ckeditor.js")}}"></script>
@endpush