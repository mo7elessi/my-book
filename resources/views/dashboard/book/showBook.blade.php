
@extends('layout.mainLayout')

@section('pageContent')
<nav class="navbar navbar-light bg-light justify-content-between">
	<a class="navbar-brand"></a>
	<form class="form-inline" action="{{URL('books')}}" method="GET">
		<input class="form-control mr-sm-2" name="searchBook" type="search"
		placeholder="Search" aria-label="Search">
		<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
	</form>
</nav>
@php $count = $books->count() @endphp

<a href="{{URL('dashboard/book/addBook')}}">
	<button class="add">
		<i class="	fa fa-plus-square">
		</i>Add New
	</button></a>
	<div class="contable">

		<table class="table">
			<thead >
				<tr>
					<td scope="col">#</td>
					<td>Book</td>
					<td>Category</td>
					<td>Author</td>
					<td>ISBN</td>
					<td>language</td>
					<td>Number Page</td>
					<td colspan="3">Action</td>
				</tr>
			</thead>
			<tbody>
				@foreach($books as $book)

				<tr>    
					<td scope="row"></td>
					<td>{{$book->nameBook}}</td>
					<td>{{$book->category}}</td>
					<td>{{$book->nameAuthor}}</td>				
					<td>{{$book->isbn}}</td>
					<td>{{$book->language}}</td>
					<td>{{$book->numberPage}}</td>
					<td>
						<button type="submit" class="action">
							<a href="{{URL('book/show/' . $book->id)}}"><i style="color: #00b894"class='fas fa-eye'></i></a></button>
						</td>
					</td><td>
						<button type="submit" class="action">
							<a href="{{URL('book/edit/' . $book->id)}}">
								<i type="button" style="color: #0984e3"class='fas fa-edit'></i></a>
							</button>
						</td>				
						<td id="btn_delete">
							<form  
							class="form"  
							action="{{URL('book/delete/' . $book->id)}}"
							method="POST"
							id="del_form">
							<input type="hidden" name="_token"value="{{csrf_token()}}"/>

							<button  type="submit" class="action">
								<i style="color: #d63031" class='fas fa-trash'></i>
							</button>
						</form>	
					</td>

					@endforeach

				</tbody>

			</table>
			<div >
				{{$books->links()}}
			</div>
	
		</div>

		@stop
