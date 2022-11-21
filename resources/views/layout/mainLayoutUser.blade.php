  <!DOCTYPE html>
  <html>
  <head>
    <title>My Book</title>
    @include('include.includes')	
  </head>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"> <i class="fas fa-book-open"></i> MY BOOK</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
        </li>
           <li class="nav-item">
          <a class="nav-link"  href="{{URL('home')}}">Home</a>
        </li>
           <li class="nav-item">
          <a class="nav-link" href="{{URL('publishingHouse')}}">Publishing Houses</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link"type="button"   href="{{URL('author')}}">Authors</a>
        </li>
      </ul>
    <form class="d-flex" action="{{URL('search/book')}}" method="GET">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
        <input style="width: 400px"name="searchBook" class="form-control me-2" type="search" placeholder="Search about books" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button><br>
      </form>
     
    </div>
  </div>
</nav>
  
<div id="content">
 @yield('pageContent')
</div>

</body>
@include('include.js')	
</html>