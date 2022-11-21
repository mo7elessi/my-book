  <!DOCTYPE html>
  <html>
  <head>
    <title>Dashboard</title>
    @include('include.includes')	
  </head>

  <div id="viewport">
    <!-- Sidebar -->
    <div id="sidebar">
      <header>
        <a href="#"><i class="fas fa-book-open"></i> MY BOOK</a>
      </header>
      <ul class="nav">
      <a  href="{{URL('dashboard')}}">
        <li>
          <i class="fas fa-th-large"></i>Dashboard
        </li> 
      </a>
       <a  href="{{URL('publishingHouses')}}">
        <li >
          <i class="fas fa-school"></i>Publishing Houses
        </li> 
      </a>
      <a href="{{URL('authors')}}"> 
        <li>
         <i class="fas fa-book-reader"></i>Authors
       </li>       
     </a>

     <a href="{{URL('books')}}">
       <li>
        <i class="fas fa-book-open"></i>Books
      </li>       
    </a>

    <a href="#">  
     <li>
      <i class="fas fa-users"></i>Users
    </li>      
  </a>

  <a href="#">  
   <li>
    <i class="fa fa-question-circle"></i>About
  </li>      
</a>


<a href="#"> <li>
  <i class="fas fa-comment-alt"></i>Contact
</li>        </a>

<a href="{{URL('login')}}">   <li>
  <i class="fa fa-sign-out"></i>Logout
</li>        </a>

</ul>

</div>

<div id="content">
 @yield('pageContent')
</div>
</div>

</body>
@include('include.js')	
</html>