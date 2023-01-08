<div class="adminheader">
    <ul>
        <li><a href="">Admin</a></li>
       
        @if(session('status'))
  
    
      <li ><a href="" style="color: red">  {{ session('status') }}</a></li>
  
        @endif
    </ul>
</div>