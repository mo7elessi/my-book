

@extends('layout.mainLayout')

@section('pageContent')

<nav class="navbar navbar-light bg-light justify-content-between">
	<a class="navbar-brand"></a>
	<form class="form-inline" action="{{URL('authors')}}" method="GET">
		<input class="form-control mr-sm-2" name="searchAuthor" type="search"
		placeholder="Search" aria-label="Search">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
	</form>
</nav>
@php $count = $authors->count() @endphp
@if($count != 0)
<a href="{{URL('dashboard/author/addAuthor')}}">
	<button class="add">
		<i class="	fa fa-plus-square">
		</i>Add New
	</button>
</a>

<div class="contable">
	<div class="not-found" style="display:none">Not Found</div>

</script>

<table class="table">
	<thead >
		<tr>
			<td scope="col">#</td>
			<td>Author</td>
			<td>Publishing House</td>
			<td>Number Books</td>
			<td>country</td>

			<td colspan="3">Action</td>
		</tr>
	</thead>
	<tbody>
		@foreach($authors as $author)
		<tr class="list">    
			<td scope="row"></td>
			<td><img class="showimg" src="{{$author->images}}">
			<span>{{$author->nameAuthor}}</span></td>
			<td>{{$author->namePublishingHouse}}</td>
			@php $book = $author->book; @endphp
			<td>{{$book->count()}}</td>
			<td>{{$author->country}}</td>
			<td >
				<button type="submit" class="action">
					<a href="{{URL('author/show/' . $author->id)}}"><i style="color: #00b894"class='fas fa-eye'></i></a></button></td>
				</td>

				<td>
					<button type="submit" class="action">
						<a href="{{URL('author/edit/' . $author->id)}}">
							<i type="button" style="color: #0984e3"class='fas fa-edit'></i></a></button>

						</td>				
						<td >
							<form  
							class="form"  action="{{URL('author/delete/' . $author->id)}}"
							method="POST">
							<button type="submit" class="action">
								<input type="hidden" name="_token"value="{{csrf_token()}}">
								<i style="color: #d63031" class='fas fa-trash'></i>
							</button></form>	
						</td>

						@endforeach

					</tbody>

				</table>

				<div>

					{{$authors->links()}}
				</div>
				@else
				<div class="messageNo">
					
					<h1 class="message">No Result Yet :)</h1>
					<a href="{{URL('authors')}}">
						<button class="add">
							Back
						</button>
					</a>
				</div>
				@endif
			</div>
			@stop
