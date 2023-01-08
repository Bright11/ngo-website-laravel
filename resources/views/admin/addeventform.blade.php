@extends('admin.admin')

@section('content')
@include('admin.adminheader')
<div class="admin--content-dashboard">
  
    @include('admin.adminsidbar')
    <div class="admin-main-content">
       
       
            <li><a href="/addvent">Back to event</a></li>
       
            <form class="formadmin" action="/addeventtodb" method="post" enctype="multipart/form-data">
                @csrf
                <label>Event Name</label>
                <input type="text" placeholder="Event Name" name="event_name">
                <label>Event Location</label>
                <input type="text" name="event_location">
                <label>Event Date</label>
                <input type="date" name="event_date">
                <label>Event Time</label>
                <input type="time"  name="event_time">
                <label>Confime Time</label>
                <select name="settime">
                    <option value="Am">Am</option>
                    <option value="Pm">Pm</option>

                </select>
                <label>Event Image</label>
                <input type="file" name="event_img">
                <label>Event Description</label>
                <textarea placeholder="Event Information" name="event_info" id="event_info"></textarea>
                <button>Save</button>
            </form>
            
        </div>
    </div>
 
@endsection

@push('custom-scripts')
<script src="https://cdn.ckeditor.com/ckeditor5/35.2.1/classic/ckeditor.js"></script>
<script src="{{asset("js/ckeditor.js")}}"></script>
@endpush