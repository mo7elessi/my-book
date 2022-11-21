@extends('layout.mainLayoutUser')

@section('pageContent')


<div class="container">
	<div class="cards">
		<div class="container-fliud">
			@foreach($publishingHouses as $p)
			@php $author = $p->author; @endphp
			
			<div class="wrapper row">
				<div class="preview col-md-4">

					<div class="preview-pic tab-content"
					style="text-align: center;">
					<div class="tab-pane active" id="pic-1">
						<img style="width: 150px;height: 150px;border-radius: 100px;" src="https://image.shutterstock.com/image-vector/pen-house-vector-logo-template-260nw-1669762600.jpg" /></div>
						<h4 class="author-title">{{$p->namePublishingHouse}}</h4>
						<p class="text-muted">{{$p->about}}</p>
						<div class="profile-card_social text-center p-4">
							<a href="#" class="fa fa-linkedin"></a>
							<a href="#" class="fa fa-twitter"></a>
							<a href="#" class="fa fa-facebook"></a>
						</div>
					</div>


				</div>						

				<div class="details col-md-8">

					<table class="table">
						<tr>
							<td><h6>Name Founder</h6></td>
							<td >{{$p->nameFounder}}</td>
						</tr>
						<tr >
							<td><h6>Count Author</h6> </td>
							<td>{{$author->count()}}</td>
						</tr>
						<tr>
							<td><h6>Country</h6></td>
							<td >{{$p->country}}</td>
						</tr>
						<tr>
							<td><h6>Headquarters</h6></td>
							<td >{{$p->headquarter}}</td>
						</tr>
						<tr>
							<td><h6>Phone</h6></td>
							<td>{{$p->phone}}</td>
						</tr>
						<tr>
							<td><h6>Year Founded</h6></td>
							<td >{{$p->yearFounded}}</td>
						</tr>
					</table>

				</div>
	
			</div>
			@endforeach
		</div>
	</div>
	<div class="row">
		<h3 class="title">All Authors</h3><br>
		@php $count = $author->count() @endphp
		@if($count != 0)
		@foreach($author as $a)
		<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
			<a  href="{{URL('author/show/' . $a->id)}}">
				<div class="profile-card bg-white shadow mb-4 text-center rounded-lg p-4 position-relative h-100">
					<div class="profile-card_image">
						<img src="https://media.istockphoto.com/photos/portrait-of-smiling-handsome-man-in-blue-tshirt-standing-with-crossed-picture-id1045886560?k=6&m=1045886560&s=612x612&w=0&h=hXrxai1QKrfdqWdORI4TZ-M0ceCVakt4o6532vHaS3I=" alt="User" class="mb-4 ">
					</div>
					<div class="profile-card_details">
						<h4 class="mb-0">{{$a->nameAuthor}}</h4>
						<p  class="text-muted">{{$a->namePublishingHouse}}</p>
						<p class="dec"class="text-muted">{{$a->about}}</p>
					</div>
					<div class="profile-card_social text-center p-4">
						<a href="#" class="fa fa-linkedin"></a>
						<a href="#" class="fa fa-twitter"></a>
						<a href="#" class="fa fa-facebook"></a>
					</div>

				</div>

			</div>
		</a>
		@endforeach
		@else
		<h1 class="message" style="text-align: center;">There are no authors at the moment... :)</h1>
		@endif
	</div>
	<br>
	<div class="cards2">
		<h3 class="title">All Books</h3><br>

		@php $author = $p->author; @endphp
		@foreach($author as $a)
		@php $book = $a->book @endphp

		@php $count = $book->count() @endphp
		@if($count != 0)

		@foreach($book as $b)
		<a  href="{{URL('book/show/' . $b->id)}}">
			<div class="card">
				<img class="imgBook" src="https://upload.wikimedia.org/wikipedia/en/f/fb/Le_Livre_d%27image.png" class="card-img-top" alt="...">
				<div class="card-body">
					<h6 class="card-title">{{$b->nameBook}}</h6>
					<p class="card-text">{{$b->nameAuthor}}</p>
				</div>
			</div>
		</a>
		@endforeach

		
		@endif
		@endforeach

	</div>
	<br>


</div>
</div>
</div>
@stop

