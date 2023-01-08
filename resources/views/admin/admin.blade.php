<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>  @yield('title') New Life Regeneration Foundation</title>
    <link rel="stylesheet" href="{{asset('css/admincss.css')}}">
    <link rel="stylesheet" href="{{asset("css/bootstrap.css")}}">
</head>
<body>
    {{-- @include('admin.adminheader') --}}
    @yield('content')
@include('admin.adminfooter')

