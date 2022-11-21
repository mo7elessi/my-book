@extends('layout.mainLayoutUser')

@section('pageContent')


<div class="container">
	<div class="cards">
		<div class="container-fliud">
			<div class="wrapper row">
				<div class="preview col-md-4">

					<div class="preview-pic tab-content">
						<div class="tab-pane active" id="pic-1">
							<img src="https://upload.wikimedia.org/wikipedia/en/f/fb/Le_Livre_d%27image.png" /></div>

						</div>

						
					</div>
					@foreach($bookDetails as $bookDetail)


					<div class="details col-md-8">
						<h3 class="product-title">{{$bookDetail->nameBook}}</h3>
						<div class="rating">
							<div class="stars">
								<span class="review-no">41 reviews</span>

								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
						</div>
						<h6>Description</h6>
						<p class="product-description">{{$bookDetail->description}}</p>
						<table class="table">
							<tr>
								<td><h6>Name Author</h6></td>

								<td>
						
									<a href="{{URL('author/show/' . $bookDetail->author_id)}}">
										{{$bookDetail->nameAuthor}}</a>
									</td>
								</tr>

								<tr>
									<td><h6>Name Publishing House</h6></td>
									<td>Thornton</td>
								</tr>
								<tr >
									<td ><h6>Category</h6> </td>
									<td >{{$bookDetail->category}}</td>
								</tr>
								<tr>
									<td><h6>Number Page</h6></td>
									<td >{{$bookDetail->numberPage}}</td>
								</tr>
								<tr>
									<td><h6>Language</h6></td>
									<td >{{$bookDetail->language}}</td>
								</tr>
								<tr>
									<td><h6>ISBN</h6></td>
									<td >{{$bookDetail->isbn}}</td>
								</tr>
								<tr>
									<td><h6>Year of Release</h6></td>
									<td >{{$bookDetail->yearOfRelease}}</td>
								</tr>
							</table>
							<div class="action">
								<button class="btnAddtocard" type="submit">add to cart</button>
							</div>
						</div>
						@endforeach

					</div>
				</div>
			</div>
		</div>
		@stop

