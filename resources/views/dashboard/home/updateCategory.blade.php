@extends('layout.mainLayout')
@section('pageContent')

<div class="btnAdd">
	<a href="{{URL('dashboard')}}">
		<button class="btnShow">
			<i class="fas fa-th-list"></i>Show Category</button></a>
		</div><br>
		<div class="formCont">
			<div class="message-result">
				@if(session()->has('add_status'))
				@if(session('add_status'))
				<div class="alert alert-success">Updated Success</div>
				@else
				<div class="alert alert-dange">Updated Faild</div>
				@endif
				@endif
			</div>
			@foreach($category as $category)

			<form class="form" enctype="multipart/form-data" 
			action="{{URL('home/update/' . $category->id)}}"  method="POST" >

			<input type="hidden" name="_token" value="{{csrf_token()}}">

			<div class="inputpub">
				<label for="nameCategory">Name Category<span> *</span> </label>
				<input style="width: 620px" type="nameCategory" name="nameCategory" id="nameCategory"
				value="{{$category->categoryName}}">
				@foreach($errors ->get('nameCategory') as $massage)
				<p class="errorMessage">
					{{$massage}}	
				</p>
				@endforeach

			</div><br>
			<div class="inputpub">
				<label for="desc">Description<span> *</span></label><br>
				<textarea rows="5" cols="10" type="text"
				name="desc" id="desc"
				>{{$category->description}}</textarea>
				@foreach($errors ->get('desc') as $massage)
				<p class="errorMessage">
					{{$massage}}	
				</p>
			@endforeach</div>
			<button class="save">UPDATE</button>
		</form>
		@endforeach
	</div>

	@stop