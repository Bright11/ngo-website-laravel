<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Life Regineration Foundation @yield('title')</title>
    <link rel="shortcut icon" href="{{asset('logo/logo.jpeg')}}" type="image/x-icon">
    @stack('icon')
    <link rel="stylesheet" href="{{asset("css/bootstrap.css")}}">
    <link rel="stylesheet" href="{{asset("css/frontend.css")}}">
  <meta name="description"
    content="New Life Regeneration Foundation is a nonprofit organization focusing on youth who are into drugs and other activities which may be harmful to their body">
<meta name="keywords" content="Agriculture,nonprofit,
Nonprofit,drug addiction,alcohilism,illicit drugs, for women,women empowerment,socio-cultural,mental health,
Social justice, nonprofit organizations,
Health and fitness,organizations,
Eco-friendly,Nonprofit organizations near me
Local nonprofits near me,
Top nonprofits in Africa,Charity‌,charity‌
Best nonprofits in Ghana">
@yield('description')
    <meta name="author" content="New Life Regeneration Foundation">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link
    href="https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@0,100;0,300;1,100;1,200;1,300&family=Roboto:ital,wght@0,100;0,300;1,100&display=swap"
    rel="stylesheet">
</head>
<body oncontextmenu="return false">
    {{-- <body> --}}
    @include('frontend.topnavbar')
    @include('frontend.navbar')
    @yield('content')
    @include('frontend.footer')
