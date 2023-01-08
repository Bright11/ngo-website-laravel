<div class="admin-sidar-holder">
   <ul>
      <li><a href="/dashboard">Admin Dasboard</a></li>
    <li><a href="/addvent">Event</a></li>
    <li><a href="/sponsors">Sponsors</a></li>
    <li><a href="/ourcauses">Ourcauses</a></li>
    <li><a href="/admin_aboutus">About Us</a></li>
    <li><a href="/blogtable">Blog</a></li>
    <li><a href="/blogcategorytable">Blog Category</a></li>
    <li><a href="/admingallery">Gallery</a></li>
    <li><a href="/admin_videos">Videos</a></li>
    <li><a href="/seosettings">Site Settings</a></li>
    @if (Session::has('user'))
    <li><a href="">Logout</a></li>
    @endif
   </ul>
</div>

