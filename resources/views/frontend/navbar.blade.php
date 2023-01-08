<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">N.L.R.F</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        {{-- <ul class="navbar-nav me-auto  mb-2 mb-lg-0 mr-auto"> --}}
          <ul class="navbar-nav " style="margin-left: auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('ourblog')}}">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('ourgallery')}}">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('event_videos')}}">Videos</a>
        </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('about')}}">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('contact')}}">Contact Us</a>
          </li>
          <li class="nav-item" style="background-color: #F26522;border-radius:10px;">
            <a class="nav-link donatelinka" href="{{route('donation')}}" style="color:white;">Donate</a>
          </li>
          @if (Session::has('user'))
          <li class="nav-item">
            <a class="nav-link" href="{{route('dashboard')}}">Admin</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('logout')}}">Logout</a>
          </li>
          @else
          <li class="nav-item">
            <a class="nav-link" href="{{route('nlrfregister')}}">Register</a>
          </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('nlrflogin')}}">Login</a>
          </li>
          @endif
        </ul>

        {{-- <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form> --}}
      </div>
    </div>
  </nav>
  @if(session('status'))
  <div class="alert alert-success" role="alert">
    <h4>{{ session('status') }}</h4>
  </div>

  {{-- @elseif ($errors) --}}
  @elseif($errors->has('email'))
  <div class="alert alert-success" role="alert">
    <h4>Check the imformation you provid</h4>
  </div>
  @elseif($errors->has('password'))
  <div class="alert alert-success" role="alert">
    <h4>Check the imformation you provid</h4>
  </div>
  @elseif($errors->has('confirmpassword'))
  <div class="alert alert-success" role="alert">
    <h4>Check the imformation you provid</h4>
  </div>
  @endif
<style>
    a{
        font-size: 12px !important;
        font-size: 400 !important;
    }
</style>
