@extends('layout.mainLayout')

@section('pageContent')
<div class="btnAdd">
	<a href="{{URL('books')}}">
		<button class="btnShow">
			<i class="fas fa-th-list"></i>Show Books</button></a>
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
			@foreach($bookUpdate as $update)
			<form class="form" enctype="multipart/form-data"  action="{{URL('book/update/' . $update->id)}}"  method="POST" >

				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<div class="inputpub">
					<label for="nameBook">Name Book<span> *</span> </label><br>
					<input type="text" name="nameBook" id="nameBook"
					value="{{$update->nameBook}}">
					@foreach($errors ->get('nameBook') as $massage)
					<p class="errorMessage">
						{{$massage}}	
					</p>
					@endforeach	
				</div>
				<div class="inputpub">
					<label for="nameAuthor">Name Author<span> *</span></label><br>
					<select  data-live-search="true" class="form-control selectpicker"  name="nameAuthor" id="nameAuthor">
						<option value="{{$update->nameAuthor}}" selected >{{$update->nameAuthor}}</option>
						@foreach($nameAuthor as $n)
						<option value="{{$n->nameAuthor}}">
							{{$n->nameAuthor}}
						</option>
						@endforeach
					</select>
					@foreach($errors ->get('nameAuthor') as $massage)
					<p class="errorMessage">
						{{$massage}}	
					</p>
					@endforeach			
				</div>
				<div class="inputpub">
					<label for="category">Gategory<span> *</span></label><br>
					<select   data-live-search="true"  class="form-control selectpicker"  name="category" id="category">
						<option value="{{$update->category}}" selected>{{$update->category}}</option>
						@foreach($nameCategory as $n)
						<option value="{{$n->categoryName}}">{{$n->categoryName}}</option>
						@endforeach
					</select>	
					@foreach($errors ->get('category') as $massage)
					<p class="errorMessage">
						{{$massage}}	
					</p>
					@endforeach		
				</div>
				<div class="inputpub">
					<label for="language">Language<span> *</span></label><br>
					<select data-live-search="true"  class="form-control selectpicker" name="language" id="language">
						<option value="{{$update->language}}" selected>{{$update->language}}</option>
						<option value="Afrikaans">Afrikaans</option>
						<option value="Albanian">Albanian</option>
						<option value="Arabic">Arabic</option>
						<option value="Armenian">Armenian</option>
						<option value="Basque">Basque</option>
						<option value="Bengali">Bengali</option>
						<option value="Bulgarian">Bulgarian</option>
						<option value="Catalan">Catalan</option>
						<option value="Cambodian">Cambodian</option>
						<option value="Chinese">Chinese (Mandarin)</option>
						<option value="Croatian">Croatian</option>
						<option value="Czech">Czech</option>
						<option value="Danish">Danish</option>
						<option value="Dutch">Dutch</option>
						<option value="English">English</option>
						<option value="Estonian">Estonian</option>
						<option value="Fiji">Fiji</option>
						<option value="Finnish">Finnish</option>
						<option value="French">French</option>
						<option value="Georgian">Georgian</option>
						<option value="German">German</option>
						<option value="Greek">Greek</option>
						<option value="Gujarati">Gujarati</option>
						<option value="Hebrew">Hebrew</option>
						<option value="Hindi">Hindi</option>
						<option value="Hungarian">Hungarian</option>
						<option value="Icelandic">Icelandic</option>
						<option value="Indonesian">Indonesian</option>
						<option value="Irish">Irish</option>
						<option value="Italian">Italian</option>
						<option value="Japanese">Japanese</option>
						<option value="Javanese">Javanese</option>
						<option value="Korean">Korean</option>
						<option value="Latin">Latin</option>
						<option value="Latvian">Latvian</option>
						<option value="Lithuanian">Lithuanian</option>
						<option value="Macedonian">Macedonian</option>
						<option value="Malay">Malay</option>
						<option value="Malayalam">Malayalam</option>
						<option value="Maltese">Maltese</option>
						<option value="Maori">Maori</option>
						<option value="Marathi">Marathi</option>
						<option value="Mongolian">Mongolian</option>
						<option value="Nepali">Nepali</option>
						<option value="Norwegian">Norwegian</option>
						<option value="Persian">Persian</option>
						<option value="Polish">Polish</option>
						<option value="Portuguese">Portuguese</option>
						<option value="Punjabi">Punjabi</option>
						<option value="Quechua">Quechua</option>
						<option value="Romanian">Romanian</option>
						<option value="Russian">Russian</option>
						<option value="Samoan">Samoan</option>
						<option value="Serbian">Serbian</option>
						<option value="Slovak">Slovak</option>
						<option value="Slovenian">Slovenian</option>
						<option value="Spanish">Spanish</option>
						<option value="Swahili">Swahili</option>
						<option value="Swedish ">Swedish </option>
						<option value="Tamil">Tamil</option>
						<option value="Tatar">Tatar</option>
						<option value="Telugu">Telugu</option>
						<option value="Thai">Thai</option>
						<option value="Tibetan">Tibetan</option>
						<option value="Tonga">Tonga</option>
						<option value="Turkish">Turkish</option>
						<option value="Ukrainian">Ukrainian</option>
						<option value="Urdu">Urdu</option>
						<option value="Uzbek">Uzbek</option>
						<option value="Vietnamese">Vietnamese</option>
						<option value="Welsh">Welsh</option>
						<option value="Xhosa">Xhosa</option>

					</select>
					@foreach($errors ->get('language') as $massage)
					<p class="errorMessage">
						{{$massage}}	
					</p>
					@endforeach	
				</div>

				<div class="inputpub">
					<label for="isbn">ISBN<span> *</span></label><br>
					<input type="text" name="isbn" id="isbn"
					value="{{$update->isbn}}">
					@foreach($errors ->get('isbn') as $massage)
					<p class="errorMessage">
						{{$massage}}	
					</p>
					@endforeach	
					@if(session()->has('error'))
					@if(session('error'))
					<p class="errorMessage">
						It cannot be the same ISBN of the same book	
					</p>			
					@endif
					@endif
				</div>
				<div class="inputpub">
					<label for="yor">Year of Release<span> *</span></label><br>
					<input  class="date form-control" name="yor" id="yor"
					value="{{$update->yearOfRelease}}">
					@foreach($errors ->get('yor') as $massage)
					<p class="errorMessage">
						{{$massage}}	
					</p>
					@endforeach	
				</div>
				<div class="inputpub">
					<label for="numberPage">Number Page<span> *</span></label><br>
					<input type="number" name="numberPage" id="numberPage"
					value="{{$update->numberPage}}">
					@foreach($errors ->get('numberPage') as $massage)
					<p class="errorMessage">
						{{$massage}}	
					</p>
					@endforeach	
				</div><br>

				<div class="inputpub">
					<label for="desc">About Book<span> *</span></label><br>
					<textarea  rows="5" cols="10" type="text" name="desc" id="desc">
						{{$update->description}}
					</textarea>
					@foreach($errors ->get('desc') as $massage)
					<p class="errorMessage">
						{{$massage}}	
					</p>
					@endforeach	

				</div>
				<button class="save">UPDATE</button>
				@endforeach
			</form>
		</div>

		@stop