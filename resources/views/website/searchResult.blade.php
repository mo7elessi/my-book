@extends('layout.mainLayoutUser')

@section('pageContent')

<div class="mainCard">
  <h3 class="title">Search Result:</h3><br>

@php $count = $books->count() @endphp
@if($count != 0)
  @foreach($books as $b)
    <a href="{{URL('book/show/' . $b->id)}}">
	<div class="card">
		<img class="imgBook" src="https://upload.wikimedia.org/wikipedia/en/f/fb/Le_Livre_d%27image.png" class="card-img-top" alt="...">
		<div class="card-body">
			<h6 class="card-title">{{$b->nameBook}}</h6>
			<p class="card-text">{{$b->nameAuthor}}</p>
		</div>
	</div>
   </a>
      @endforeach
@else
  <div class="messagNo">
        <h1 class="message">Sorry, No Result Yet :)</h1>
  <a href="{{URL('home')}}">
          <button class="add">
            Go To Home
          </button>
        </a>
      </div>@endif
<br>
</div>
@stop

