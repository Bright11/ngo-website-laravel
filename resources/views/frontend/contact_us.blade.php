@extends('frontend.master')
@push('icon')
<link rel="stylesheet" href="{{asset("css/indexcss.css")}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

{{-- <link rel="stylesheet" href="{{asset("/owl/owl.carousel.min.css")}}">
<link rel="stylesheet" href="{{asset("/owl/owl.theme.default.min.css")}}"> --}}
@endpush
@section('content')
<style>
    label{
        color: white;
        font-size: 20px;
    }
</style>
<div class="contact-form-holder">
    <div class="contact-form" style="background-image: url({{asset("logo/logo.jpeg")}})">
        <h1>Send us a message</h1>
    <form action="/sendmessage" method="POST">
        @csrf
        <label>Name</label>
        <input type="text" name="name" placeholder="Please enter your name"/>
        <label>Email</label>
        <input type="email" name="email" placeholder="Please enter your Email"/>
        <label>Message type</label>
        <select name="inquiry">
            <option selected value="inquiry">Inquiry</option>
            <option value="donation">Donation</option>
            <option value="help people in my area">Help people in my area</option>
            <option value="other">Other</option>
        </select>
        <label>Message</label>
        <textarea rows="5" name="message" maxlength="300" ></textarea>
        <input type="submit" class="contact-form-submit" value="Send"/>
    </form>
</div>
</div>
@endsection
{{-- @push('js')
<script src="{{asset("js/jquery.js")}}"></script>
<script src="{{asset("owl/owl.carousel.min.js")}}"></script>
<script src="{{asset("owl/myowl.js")}}"></script>
@endpush --}}
