@extends('admin.admin')

@section('content')
@include('admin.adminheader')
<div class="admin--content-dashboard">

    @include('admin.adminsidbar')
    <div class="admin-main-content">


            <li style="font-size: 12;"><a href="/admin_aboutus">Back to About Us</a></li>

            <form class="formadmin" action="/aboutustodb" method="post" enctype="multipart/form-data">
                @csrf
                <label>About Us Details <small>Optional</small></label>
                <input type="text" required placeholder="About Topic" name="title">
                <textarea placeholder="Event Information" name="about" id="about"></textarea>
                <button>Save</button>
            </form>

        </div>
    </div>

@endsection

@push('custom-scripts')
<script src="https://cdn.ckeditor.com/ckeditor5/35.2.1/classic/ckeditor.js"></script>
<script src="{{asset("js/ckeditor.js")}}"></script>
@endpush
