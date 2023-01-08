@extends('admin.admin')

@section('content')
@include('admin.adminheader')
<div class="admin--content-dashboard">
  
    @include('admin.adminsidbar')
    <div class="admin-main-content">
       
       
            <li><a href="/sponsors">Back to sponsors</a></li>
       
            <form action="/addsponsordb" class="formadmin" method="post" enctype="multipart/form-data">
                @csrf
                <label>Company Name</label>
                <input type="text" placeholder="Company Name" name="company_name">
                <label>Company Location <small>Optional</small> </label>
                <input type="text" name="company_location">
                <label>Company Website <small>Optional</small> </label>
                <input type="text" name="company_website">
              
                <label>Company Logo</label>
                <input type="file" name="company_logo" >
                
                <button>Save</button>
            </form>
            
        </div>
    </div>
 
@endsection

@push('custom-scripts')
<script src="https://cdn.ckeditor.com/ckeditor5/35.2.1/classic/ckeditor.js"></script>
<script src="{{asset("js/ckeditor.js")}}"></script>
@endpush