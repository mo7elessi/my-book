@extends('layout.mainLayoutUser')

@section('pageContent')


<div class="mainCard">
  <p class="title">All Books</p><br>
@foreach($allBooks as $bs)
  <a href="{{URL('book/show/' . $bs->id)}}">
  <div class="card">
    <img class="imgBook" src="https://upload.wikimedia.org/wikipedia/en/f/fb/Le_Livre_d%27image.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h6 class="card-title">{{$bs->nameBook}}</h6>
      <p class="card-text">{{$bs->nameAuthor}}</p>
    </div>
  </div>
 </a>
@endforeach
    <div style="margin: 10px">
          {{$allBooks->links()}}
    </div>

@foreach($categories as $category)
 @php $book = $category->book; @endphp
 @if($book->count() != 0)
	<p class="title">{{$category->categoryName}}</p><br>
	@php $book = $category->book; @endphp
	@foreach($book as $b)
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
<br>
@else 
@endif
	@endforeach
</div>
@stop

