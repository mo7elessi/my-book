@extends('layout.mainLayoutUser')

@section('pageContent')
<section class="main-content">
	<div class="container">
		<h1 class="text-center">All Authors</h1>
		<p class="text-center text-muted">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem tenetur harum nobis esse ex alias.</p>
		<br><br>
		<div class="row">
			@foreach($authors as $author)
			<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
				<a  href="{{URL('author/show/' . $author->id)}}">
				<div class="profile-card bg-white shadow mb-4 text-center rounded-lg p-4 position-relative h-100">
					<div class="profile-card_image">
						<img src="https://media.istockphoto.com/photos/portrait-of-smiling-handsome-man-in-blue-tshirt-standing-with-crossed-picture-id1045886560?k=6&m=1045886560&s=612x612&w=0&h=hXrxai1QKrfdqWdORI4TZ-M0ceCVakt4o6532vHaS3I=" alt="User" class="mb-4 ">
					</div>
					<div class="profile-card_details">
						<h4 class="mb-0">{{$author->nameAuthor}}</h4>
						<p  class="text-muted">{{$author->namePublishingHouse}}</p>
						<p class="dec"class="text-muted">{{$author->about}}</p>
					</div>
					<div class="profile-card_social text-center p-4">
						<a href="#" class="fa fa-linkedin"></a>
						<a href="#" class="fa fa-twitter"></a>
						<a href="#" class="fa fa-facebook"></a>
					</div>

				</div></a>

			</div>
			@endforeach
		</div>
	</div>
</section>

@stop

