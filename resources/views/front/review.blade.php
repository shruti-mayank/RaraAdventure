@extends('layout.main')
@section('content')
<style>
	.form-control, textarea{
	    border-style: none;
	    box-shadow: none;
	    border-bottom: 1px solid black;
	    display: block;
	    border-radius: 0;
	    resize: none;
	}
	.form-control:focus, textarea:focus {
	    border-color: inherit;
	    -webkit-box-shadow: none;
	    box-shadow: none;
	}
	.form-group label{
	    font-family: 'Oswald', sans-serif;
	}
	.form-group input{
	    font-family: 'Roboto', sans-serif;
	    font-size: 16px;
	}
</style>

<div class="container pt-4" style="padding: 30px;">
	<form class="pt-3 pb-3" role="form" method="POST" action="{{route('storereview')}}">
		@csrf
		<div class="form-group pt-2">
		    <label for="num" class="heading-h2">Post Your Review</label>
		    <div class="form-group pt-2">
		        <input type="text" class="form-control" name="name" placeholder="Enter your Name">
		    </div>
		    <textarea name="reviews" class="textarea form-control mt-3" placeholder="Write your reviews" style="width: 100%; height: 100px; font-size: 16px; font-family: 'Roboto', sans-serif;line-height: 18px; padding: 10px;"></textarea>
		</div>
		<button type="submit" class="btn btn-success">Post</button>
	</form>
	<div class="row">
		@foreach($reviews as $review)
	        <div class="col-md-4 pb-3">
	            <div class="card">
	                <div class="card-body p-3">
	                    <span class="heading-h2">{{ $review->name }}</span>
	                    <p>{{ $review->reviews }}</p>
	                </div>
	            </div>
	        </div>
	    @endforeach
	</div>
</div>
@endsection