@extends('layout.main')

@section('content')
<style type="text/css">
    .card h4{
        font-family: 'Oswald', sans-serif;
    }

    .card p{
        font-family: 'Roboto', sans-serif;
    }

    .card a:hover{
        text-decoration: none;
    }
    .page-item.active .page-link {
        z-index: 1;
        color: #fff;
        background-color: #8A8988 !important;
        border-color: #807D7B !important;
    }
    .page-link{
        color: #494643 !important;
    }
</style>
    <!-- contents -->
    <div class="container destlist">
        <h1 class="heading-h1 pl-3 pb-3 pt-3">Destinations</h1>
        <div class="row mx-auto">
            @foreach($destinations as $destination)
                <div class="col-md-4 pb-3">
                    <div class="card img-fluid" style="border: none;">
                        <a href="{{route('front.destination', $destination->id)}}">
                            <img class="card-img-top card-img-top-250" src="{{asset('user/destinationimg')}}/{{$destination->image}}" alt="{{ $destination->title }}">
                        </a>
                        <a href="{{route('front.destination', $destination->id)}}">
                            <div class="card-body bg-light text-dark" style=" margin-top: -60px; margin-left: 30px;">
                                <h4 class="card-title">{{ $destination->title }}</h4>
                                <p class="card-text">{!! $destination->brief !!}</p>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="d-flex flex-row justify-content-center">
            {{ $destinations->links() }}
        </div>
    </div>
    <!-- contents ends -->
    @endsection
