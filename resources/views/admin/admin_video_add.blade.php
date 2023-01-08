@extends('admin.admin')

@section('content')
@include('admin.adminheader')
<div class="admin--content-dashboard">

    @include('admin.adminsidbar')
    <div class="admin-main-content">

       <div class="blogform-flex">

        <li><a href="/admin_videos">Back to Videos</a></li>

       </div>

            <form class="formadmin" action="/insertvideo" method="post" enctype="multipart/form-data">
                @csrf
                <label>Video title</label>
                <input type="text" placeholder="Video title" name="title">

                <label>Video Link</label>
                <input type="text" name="video">

                <button>Save</button>
            </form>

        </div>
    </div>

@endsection

@push('custom-scripts')
<script src="https://cdn.ckeditor.com/ckeditor5/35.2.1/classic/ckeditor.js"></script>
<script src="{{asset("js/ckeditor.js")}}"></script>
@endpush
