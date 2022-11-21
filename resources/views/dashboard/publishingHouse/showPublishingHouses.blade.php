@extends('layout.mainLayout')

@section('pageContent')
<nav class="navbar navbar-light bg-light justify-content-between">
	<a class="navbar-brand"></a>
	<form class="form-inline" action="{{URL('publishingHouses')}}" method="GET">
		<input class="form-control mr-sm-2" name="searchPublishingHouse" type="search"
		placeholder="Search" aria-label="Search">
		<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
	</form>
</nav>
@php $count = $publishers->count() @endphp
@if($count != 0)
<a href="{{URL('dashboard/publishingHouse/addPublishingHouses')}}">
	<button class="add">
		<i class="	fa fa-plus-square"></i>Add New</button></a>

		<div class="contable"></a>

			<table class="table">

				<thead >
					<tr>
						<td scope="col">#</td>
						<td>Publishing Houses</td>
						<td>Founder</td>
						<td>Country</td>
						<td>Number Author</td>
						<td>Number Books</td>
						<td colspan="3">Action</td>
					</tr>
				</thead>
				<tbody>
					@foreach($publishers as $publisher)
					<tr>    
						<td scope="row"></td>
						<td>
							<img class="showimg" src="{{$publisher->image}}"/>
							<span>{{$publisher->namePublishingHouse}}</span></td>
							<td>{{$publisher->nameFounder}}</td>
							<td>{{$publisher->country}}</td>
							@php $author = $publisher->author; @endphp
							<td>{{$author->count()}}</td>
							@foreach($author as $a)
							@php $book = $a->book;
							 $count = $book->count();
							 $x= $count@endphp
							@endforeach
							<td>{{$x}}</td>
							<td >
								<button type="submit" class="action">
									<a href="{{URL('publishingHouse/show/' . $publisher->id)}}"><i style="color: #00b894"class='fas fa-eye'></i></a>
								</button>
							</td>
							<td>
								<button type="submit" class="action">
									<a href="{{URL('publishingHouse/edit/' . $publisher->id)}}">
										<i type="button" style="color: #0984e3"class='fas fa-edit'></i></a></button>

									</td>				
									<td >
										<form  
										class="form"  action="{{URL('publishingHouse/delete/' . $publisher->id)}}"
										method="POST">
										<button type="submit" class="action">
											<input type="hidden" name="_token"value="{{csrf_token()}}">
											<i style="color: #d63031" class='fas fa-trash'></i>
										</button></form>	
									</td>

									@endforeach
								</tbody>
							</table>
							<div >
								{{$publishers->links()}}
							</div>
							@else
							<div class="messageNo">

								<h1 class="message">No Result Yet :)</h1>
								<a href="{{URL('publishingHouses')}}">
									<button class="add">
										Back
									</button>
								</a>
							</div>
							@endif
						</div>


						@stop
