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
    a{
        color: #000!important;
    }
</style>
    <!-- contents -->
    <div class="container destlist">
        <h1 class="heading-h1 pl-3 pb-3 pt-3">Packages</h1>
        <div class="row mx-auto">
            @foreach($packages as $package)
                <div class="col-md-4 pb-3">
                    <div class="card img-fluid" style="border: none;">
                        <a href="{{route('front.package', $package->id)}}">
                            <img class="card-img-top card-img-top-250" src="{{asset('user/packageimg')}}/{{$package->image}}" alt="{{ $package->title }}">
                        </a>
                        <a href="{{route('front.package', $package->id)}}">
                            <div class="card-body bg-light text-dark" style=" margin-top: -60px; margin-left: 30px;">
                                <h4 class="card-title heading-h2">{{ $package->duration }} <hr style="background-color: #FA6903!important;">{{ $package->title }}</h4>
                                <p class="card-text">
                                    <?php  echo substr($package->description,0,125) ?>....
                                </p>
                                <a href="{{ route('front.package', $package->id) }}">
                                   <p style="color: #FA6903!important; float: right;">Learn more</p>
                                </a>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="d-flex flex-row justify-content-center">
            {{ $packages->links() }}
        </div>
    </div>
    <!-- contents ends -->
    @endsection
