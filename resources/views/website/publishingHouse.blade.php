@extends('layout.mainLayoutUser')

@section('pageContent')
<section class="main-content">
	<div class="container">
		<h1 class="text-center">All Publishing House</h1>
		<p class="text-center text-muted">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem tenetur harum nobis esse ex alias.</p>
		<br><br>
		<div class="row">
			@foreach($publishers as $publisher)
			<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
			<a  href="{{URL('publishingHouse/show/' . $publisher->id)}}">
				<div class="profile-card bg-white shadow mb-4 text-center rounded-lg p-4 position-relative h-100">
					<div class="profile-card_image">
						<img src="https://image.shutterstock.com/image-vector/pen-house-vector-logo-template-260nw-1669762600.jpg" alt="User" class="mb-4 ">
					</div>
					<div class="profile-card_details">
						<h4 class="mb-0">{{$publisher->namePublishingHouse}}</h4>
												<p  class="text-muted"></p>

						<p style="	height: 100px;
						text-overflow: ellipsis;
						overflow: hidden;
						color: #b2bec3;" class="text-muted">{{$publisher->about}}</p>
					</div>
					<div class="profile-card_social text-center p-4">
						<a href="#" class="fa fa-linkedin"></a>
						<a href="#" class="fa fa-twitter"></a>
						<a href="#" class="fa fa-facebook"></a>
					</div>
					
				</div>
			</a>
			</div>
			@endforeach
		</div>
	</div>
</section>

@stop

