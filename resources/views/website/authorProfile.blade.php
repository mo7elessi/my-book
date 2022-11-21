@extends('layout.mainLayoutUser')

@section('pageContent')


<div class="container">
	<div class="cards">
		<div class="container-fliud">
			@foreach($authors as $a)
			@php $book = $a->book; @endphp
			
			<div class="wrapper row">
				<div class="preview col-md-4">

					<div class="preview-pic tab-content"
					style="text-align: center;">
					<div class="tab-pane active" id="pic-1">
						<img style="width: 150px;height: 150px;border-radius: 100px;" src="https://us.123rf.com/450wm/dolgachov/dolgachov1606/dolgachov160604018/58527631-emotion-and-people-concept-happy-smiling-young-man-with-crossed-arms-over-gray-background.jpg?ver=6" /></div>
						<h4 class="author-title">{{$a->nameAuthor}}</h4>
						<p class="text-muted">{{$a->about}}</p>
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
							<td><h6>Name Publishing House</h6></td>
						<td><a href="{{URL('publishingHouse/show/' . $a->publishinghouse_id)}}">
							{{$a->namePublishingHouse}}</a></td>
						</tr>
						<tr >
							<td><h6>Count Books</h6> </td>
							<td>{{$book->count()}}</td>
						</tr>
						<tr>
							<td><h6>Country</h6></td>
							<td >{{$a->country}}</td>
						</tr>
						<tr>
							<td><h6>City</h6></td>
							<td >{{$a->city}}</td>
						</tr>
						<tr>
							<td><h6>Phone</h6></td>
							<td>{{$a->phone}}</td>
						</tr>
						<tr>
							<td><h6>E-mail</h6></td>
							<td >{{$a->email}}</td>
						</tr>
						<tr>
							<td><h6>Address</h6></td>
							<td >{{$a->address}}</td>
						</tr>
					</table>

				</div>

			</div>
			@endforeach
		</div>
	</div>
	<div class="cards2">
  <h3 class="title">All Books</h3><br>
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
	@else
		<h1 class="message" style="text-align: center;">Books will be Publish soon... :)</h1>
	@endif
</div>
<br>
</div>
</div>
</div>
@stop

