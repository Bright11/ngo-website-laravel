@extends('frontend.master')
@push('icon')
<link rel="stylesheet" href="{{asset("css/indexcss.css")}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


@endpush
@section('content')
    <style>
        .notfound {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            margin: 50px 0px;
        }
        .notfound a{
            text-decoration: none;
            background-color: #F26522;
            color: white;
            font-size: 20px;
            font-weight: 600;
            padding: 20px;
        }
    </style>
    <div class="notfound">
        <h1>404 NOT FOUND</h1>
        <a href="">Back to the site</a>

    </div>
@endsection
@push('js')

@endpush
