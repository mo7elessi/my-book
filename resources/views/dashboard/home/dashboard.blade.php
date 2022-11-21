@extends('layout.mainLayout')

@section('pageContent')
<nav class="navbar navbar-light bg-light justify-content-between">
	<a class="navbar-brand"></a>
	<form class="form-inline" action="{{URL('dashboard')}}" method="GET">
		<input class="form-control mr-sm-2" name="searchCategory" type="search"
		placeholder="Search" aria-label="Search">
		<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
	</form>
</nav>
<div class="row">
	<div class="col-md-3">
		<div class="card-counter info">
			<i class="fas fa-th-large"></i>
			<span class="count-numbers">{{$countCategory}}</span>
			<span class="count-name">Category</span>
		</div>
	</div>
	<div class="col-md-3">
		<div class="card-counter primary">
			<i class="fas fa-school"></i>
			<span class="count-numbers">{{$countPubhouse}}</span>
			<span class="count-name">Publish House</span>
		</div>
	</div>

	<div class="col-md-3">
		<div class="card-counter success">
			<i class="fas fa-book-reader"></i>
			<span class="count-numbers">{{$countAuthor}}</span>
			<span class="count-name">Author</span>
		</div>
	</div>
	<div class="col-md-3">
		<div class="card-counter danger">
			<i class="fas fa-book-open"></i>
			<span class="count-numbers">{{$countBook}}</span>
			<span class="count-name">Book</span>
		</div>
	</div>

</div>

<a href="{{URL('dashboard/home/addCategory')}}">
	<button class="add">
		<i class="	fa fa-plus-square"></i>Add New</button></a>


		<div class="contable"></a>

			<table class="table" >

				<thead >
					<tr>
						<td scope="col">#</td>
						<td>Gategory</td>
						<td>Number Book</td>
						<td colspan="4">Descripthion</td>
						<td colspan="2">Action</td>
					</tr>
				</thead>
				@foreach($categorys as $category)

				<tbody>
					<tr >   
						<td scope="col"></td> 
						<td>{{$category->categoryName}}</td>

						@php $num = $category->book; @endphp
						<td>{{$num->count()}}</td>

						<td colspan="4">{{$category->description}}</td>							
						<td ><button type="submit" class="action"><a href="{{URL('home/edit/' . $category->id)}}">
							<i type="submit" style="color: #0984e3"class='fas fa-edit'></i></a></button></td>
							<td><form  class="form" 
								action="{{URL('home/delete/' . $category->id)}}"
								method="POST">
								<input  type="hidden" name="_token" value="{{csrf_token()}}">

								<button id="btn_delete" type="submit" class="action">

									<i style="color: #d63031" class='fas fa-trash'></i>
								</button></form>		
							</td>
						</tr> 
					</tbody>	
					@endforeach   

				</table>
				<div >
					{{$categorys->links()}}
				</div>
				<!--<div class="text-center">
				<a href="#myModal" class="trigger-btn" data-toggle="modal">Click to Open Confirm Modal</a>
				</div>

				<div id="myModal" class="modal fade">
					<div class="modal-dialog modal-confirm">
						<div class="modal-content">
							<div class="modal-header flex-column">
								<div class="icon-box">
									<i class="material-icons">&#xE5CD;</i>
								</div>						
								<h4 class="modal-title w-100">Are you sure?</h4>	
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							</div>
							<div class="modal-body">
								<p>Do you really want to delete these records? This process cannot be undone.</p>
							</div>
							<div class="modal-footer justify-content-center">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
								<button id="btn_delete" type="button" class="btn btn-danger" >Delete</button>
							</div>
						</div>
					</div>
				</div>    
			</div>--> 

			@stop 




<script type="text/javascript">
  $('#btn_delete').click(function(e){
    return true;
    

  });
  
</script>