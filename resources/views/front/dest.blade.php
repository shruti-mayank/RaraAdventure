@extends('layout.main')

@section('content')
<style type="text/css">
    .moredest{
        background-color:#EFF1EE;
        border-radius: 5px;
        border:solid 1px #E8E8E8;
    }

    .moredest a{
        color: #000;
    }

    .moredest a h5{
        font-family: 'Oswald', sans-serif;
    }

    .moredest a p{
        font-family: 'Roboto', sans-serif;
        font-size: 14px;
    }

    .moredest a:hover{
        text-decoration: none;
    }

    .moredest a button{
        font-size: 13px;
    }
    #dests:hover{
        color: white;
    }
    .moredest a img{
        height: 100%;
        width: 100%;
    }
    #itinerary h5{
        font-family: 'Oswald', sans-serif;
    }
    #bookplace a{
        text-decoration: none;
    }
    #bookplace a button:hover{
        background-color: #FA6903;
        color: white;
    }
    .active{
        border-bottom: 2px solid black !important;
    }
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
    <!-- Content -->
    <div class="container-fluid place">
        <div class="container p-4">
            <div class="row">
                <div class="col-md-8">
                   <div class="card mb-4">
                        <img src="{{ asset('user/destinationimg') }}/{{ $destinations->image }}" alt="{{ $destinations->title }}" class="img-fluid img-responsive w-100 card-img" style="opacity: 0.9;">
                        <div class="container title-h1 pb-1 card-img-overlay d-flex flex-column justify-content-end my-3">{{ $destinations->title }}</div>
                   </div>
                        <div class="tabs">
                            <button class="tablink active" onclick="openPage('about', this, '#fff')" id="defaultOpen">About</button>
                            <button class="tablink" onclick="openPage('itinerary', this, '#fff')">Itinerary</button>
                            <button class="tablink" onclick="openPage('package', this, '#fff')">Packages</button>
                            <button class="tablink" onclick="openPage('review', this, '#fff')">Reviews</button>
                            <div id="about" class="tabcontent">
                              <p>{!! $destinations->description !!}</p>
                            </div>
                            <div id="itinerary" class="tabcontent">
                              <p>
                                <h5>Duration:</h5>&nbsp; {!! $destinations->duration !!}<br><br>
                                <h5>Itinerary:</h5> <br> {!! $destinations->itinerary !!}<br><br>
                                <h5>Price:</h5>&nbsp;{!! $destinations->price !!}<br><br>
                                <h5>Price Includes:</h5><br>{!! $destinations->priceinclude !!}<br><br>
                              </p>
                            </div>

                            <div id="package" class="tabcontent">
                              @foreach($packages as $package)
                                @if($destinations->id==$package->destination_id)
                                <div class="row pb-3">
                                    <div class="col-5">
                                        <a href="{{route('front.destination', $package->id)}}">
                                            <img src="{{asset('user/packageimg')}}/{{$package->image}}" class="card-img img-fluid img-responsive">
                                        </a>
                                    </div>
                                    <div class="col-7 d-flex flex-column justify-content-center">
                                        <h5>{{ $package->title }}</h5>
                                        <p>{!! $package->brief !!}</p>
                                    </div>
                                </div>
                                @endif
                                @endforeach
                            </div>

                            <div id="review" class="tabcontent">
                                <form class="pt-3 pb-3" role="form" method="POST" action="{{route('storereview')}}">
                                    @csrf
                                    <div class="form-group pt-2">
                                        <label for="num" class="heading-h2">Post Your Review</label>
                                        <div class="form-group pt-2">
                                            <input type="text" class="form-control" name="name" placeholder="Enter your Name">
                                        </div>
                                        <textarea name="reviews" class="textarea form-control mt-3" placeholder="Write your reviews" style="width: 100%; height: 100px; font-size: 16px; font-family: 'Roboto', sans-serif;line-height: 18px; padding: 10px;"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-success" style="border-bottom: none!important;">Post</button>
                                </form>
                                @foreach($reviews as $review)
                                <div class="row pb-3">
                                    <div class="card p-3">
                                        <div class="col-md-12">
                                           <h5>{{ $review->name }}</h5>
                                            <p>{{ $review->reviews }}</p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                        <div class="col-md-4">
                            <div class="card mb-md-5 mb-3" id="bookplace">
                                <img src="{{URL::asset('/user/banner/book.jpg')}}" class="card-img img-fluid img-responsive" style="background-size: cover; width: 100%; height: 380px; opacity: 0.6;">
                                <div class="card-img-overlay d-flex flex-column justify-content-center">
                                    <p class="display-3container-fluid text-center pb-3 text-white" style="font-family: 'Oswald', sans-serif; font-size: 25px;">Find your next big adventure</p>
                                    <a href="{{route('book')}}"><button class="btn btn-block" style="font-family: 'Oswald', sans-serif; font-size: 20px;">Book Now</button></a>
                                </div>
                            </div>
                            <div class="p-3 moredest pb-5">
                                <h2 class="heading-h2 pb-3">More Destinations</h2>
                                @foreach($dests as $destination)
                                @if($destination->banner==1)
                                <div class="row pb-3">
                                    <div class="col-5">
                                        <a href="{{route('front.destination', $destination->id)}}">
                                            <img src="{{asset('user/destinationimg')}}/{{$destination->image}}" style="height: 100px;" class="card-img img-fluid img-responsive">
                                        </a>
                                    </div>
                                    <div class="col-7 d-flex flex-column justify-content-center">
                                        <a href="{{route('front.destination', $destination->id)}}">
                                            <h5>{{ $destination->title }}</h5>
                                            <p>{!! $destination->brief !!}</p>
                                        </a>
                                    </div>
                                </div>
                                @endif
                                @endforeach
                                <a href="{{ route('alldest') }}"><button class="btn btn-outline-success text-center p-1 pr-3 pl-3 float-right" id="dests">Explore</button></a>
                            </div>
                        </div>
                </div>        
            </div>
        </div>
    </div>
    <!-- /Content -->
    <script>
        $('.tabs .tablink').toggleClass('active');
    </script>
@endsection
