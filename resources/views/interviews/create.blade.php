@extends('base')

@section('content')
		<section class="ftco-section contact-section">
		<form action="{{ route('interviews.store') }}" method="post" enctype="multipart/form-data">
        @csrf
	      <div class="container">
	        <div class="row d-flex mb-2 contact-info">
	          <div class="col-md-12 mb-2">
	            <h2 class="h4 font-weight-bold">Submission Plate</h2>
	          </div>
	          <!--<div class="w-100"></div>
	          <div class="col-md-3">
	            <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
	          </div>
	          <div class="col-md-3">
	            <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
	          </div>
	          <div class="col-md-3">
	            <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
	          </div>
	          <div class="col-md-3">
	            <p><span>Website</span> <a href="#">yoursite.com</a></p>
	          </div>-->

	@if(session()->has('message'))
      <div class="alert alert-success alert-dismissible" role="alert">
         <div class="alert-message">
            {{ session('message') }}
         </div>
      </div>
      @endif 
      @if ($errors->any())
      <div class="alert alert-danger">
         <div class="alert-message">
            <ul>
               @foreach ($errors->all() as $error)
               <li>{{ $error }}</li>
               @endforeach
            </ul>
         </div>
      </div>
      @endif


	        </div>
	        <div class="row block-9">
	          <div class="col-md-8 pr-md-5">
	            <form action="#">
	              <div class="form-group">
				  	<label>Your name, designation (eg: Raj Sharma, CEO at Insync)</label>
	                <input type="text" class="form-control" placeholder="Enter here ..." name="name" value="{{ old('name') }}" required>
	              </div>
	              <div class="form-group">
				  	<label>Company website</label> 
	                <input type="text" class="form-control" placeholder="Enter url here..." name="website" value="{{ old('website') }}" required>
	              </div>
				  <div class="form-group">
					<label>Give a short description about your company in approx. 100 words.</label>
	                <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Answer goes here ..." name="description" required>{{ old('description') }}</textarea>
	              </div>
	              <div class="form-group">
					<label>What inspired you to start your company, and what were the initial challenges you faced in the early stages?</label>
	                <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Answer goes here ..." name="question1" required>{{ old('question1') }}</textarea>
	              </div>
				  <div class="form-group">
					<label>Can you share a pivotal moment or decision in your entrepreneurial journey that significantly impacted the direction and success of your company?</label>
	                <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Answer goes here ..." name="question2" required>{{ old('question2') }}</textarea>
	              </div>
				  <div class="form-group">
					<label>How do you maintain a strong company culture and foster innovation within your team as your company grows?</label>
	                <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Answer goes here ..." name="question3" required>{{ old('question3') }}</textarea>
	              </div>
				  <div class="form-group">
					<label>In a competitive market, what sets your company apart from others in terms of product, service, or values?</label>
	                <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Answer goes here ..." name="question4" required>{{ old('question4') }}</textarea>
	              </div>
				  <div class="form-group">
					<label>What is one piece of advice you would give to aspiring entrepreneurs who are starting their own ventures?</label>
	                <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Answer goes here ..." name="question5" required>{{ old('question5') }}</textarea>
	              </div>
				  <div class="form-group">
					<label>Your Photo (max size: 1mb) (approx: 300X300)</label>
	                <input type="file" class="form-control" name="profile_photo" required>
	              </div>
	              <div class="form-group">
	                <input type="submit" value="Submit Details" class="btn btn-primary py-3 px-5">
	              </div>
	            </form>
	          
	          </div>

	          <div class="col-md-4">
	          	<div id="map"></div>
	          </div>
	        </div>
	      </div>
		</form>
	    </section>
@endsection