@extends('layout.main')

@section('content')
<!-- slider -->
<div class="container-fluid p-0 bg-dark text-white">
    <div class="slider">
    <div>
        <img class="d-block w-100 img-fluid img-responsive card-img" src="{{asset('user/slides/bardiya_nepal_banner.jpeg')}}" alt="Bardiya National Park" style="opacity: 0.9;">
        <div class="container-fluid card-img-overlay d-flex flex-column justify-content-end mx-4">
            <div class="container my-3 bannertext" style="border-left: 4px solid #FA6903;">
                <span class="title pt-md-5">Bardiya</span>
                <p>Walk through the silent jungles and surprise yourself with the amazing wildlife of Bardiya</p>
            </div>
        </div>
    </div>
    <div>
        <img class="d-block w-100 img-fluid img-responsive card-img" src="{{asset('user/slides/dolpo.jpg')}}" alt="Upper Dolpo" style="opacity: 0.9;">
        <div class="container-fluid card-img-overlay d-flex flex-column justify-content-end mx-4">
            <div class="container my-3 bannertext" style="border-left: 4px solid #FA6903;">
                <span class="title pt-md-5">Upper Dolpo</span>
                <p>Experience adventurous trekking to the remote landscape of Nepal</p>
            </div>
        </div>
    </div>
    <div>
        <img class="d-block w-100 img-fluid img-responsive" src="{{asset('user/slides/Rara-Lake.jpg')}}" alt="Rara Lake" style="opacity: 0.9;">
        <div class="container-fluid card-img-overlay d-flex flex-column justify-content-end mx-4">
            <div class="container my-3 bannertext" style="border-left: 4px solid #FA6903;">
                <span class="title pt-md-5">Rara Lake</span>
                <p>Amaze yourself with the hearttaking beauty of the largest lake of Nepal</p>
            </div>
        </div>
    </div>
    <div>
        <img class="d-block w-100 img-fluid img-responsive" src="{{asset('user/slides/lumbini.jpeg')}}" alt="Lumbini" style="opacity: 0.9;">
        <div class="container-fluid card-img-overlay d-flex flex-column justify-content-end mx-4">
            <div class="container">
                <div class="container my-3 bannertext" style="border-left: 4px solid #FA6903;">
                    <span class="title pt-md-5">Lumbini</span>
                    <p>Birthplace of history's most revered figures, Siddhartha Gautam Buddha</p>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
<!-- slider ends -->

    <!-- Quote -->
    <div class="container px-5 pt-4 text-center">
       <div class="row">
           <div class="col-md-1"></div>
           <div class="col-md-10" style="font-family: 'Oswald', sans-serif;">
               <i class="fas fa-quote-left" style="font-size: 50px; color: #FA6903; margin-top: 30px;">
                    <span><b style="font-size: 35px;" class="heading-h2">The world is a book and those who do not travel read only one page.</b><br>
                    <span style="font-size: 18px; font-family: 'Roboto', sans-serif; font-weight: 300px; color: #959595;" class="float-right pt-2">-Agustine of Hippo</span></span>
                </i>
           </div>
           <div class="col-md-1"></div>  
       </div> 
    </div>
    <!-- /Quote -->

    <!-- list cards -->
    @include('front.package')
    <!-- /list cards -->

     <!-- review -->
    <div class="container-fluid bg-light reviews pb-5 pt-4">
       <div class="container">
           <div class="heading-h1 pb-1">Reviews</div>
               <div class="row mx-auto">
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
            <a href="{{ route('alldest') }}">
                <button class="btn btn-outline-success text-center p-1 px-4 float-right">Learn more</button>
            </a>
       </div> 
    </div>
    <!-- /review -->

    <!-- contents -->
    <div class="container text-white destination px-5 mb-3">
        <div class="heading-h1 pb-1">Discover Places</div>
        <div class="row no-gutters mx-auto" id="dest">
            @foreach($dest as $destination)
            @if($destination->gallery==1)
            <div class="col-md-4">
                <a href="{{route('front.destination', $destination->id)}}" id="card1">
                    <img src="{{asset('user/destinationimg')}}/{{$destination->image}}" style="height: 300px;" class="card-img img-fluid img-responsive">
                    <div class="card-body card-img-overlay overlay d-flex flex-column justify-content-end text-white">
                        <h4 class="card-title">{{ $destination->title }}</h4>
                        <p>{!! $destination->brief !!}</p>
                    </div>
                </a>
            </div>
            @endif
            @endforeach
        </div>
        <a href="{{ route('alldest') }}">
            <button class="btn btn-outline-success text-center p-1 px-4 float-right mt-3">Explore</button>
        </a>
    </div>
    <!-- contents ends -->

    <div class="container-fluid direction pt-4 bg-light" style="padding-bottom: 40px;">
        <div class="container px-5">
        <div class="row ">
            <div class="col-md-6 pt-3">
                <div class="heading-h1 pb-1 text-left">Namaste to all our patrons!</div>
                <p style="font-size: 16px;">Rara Adventure is a premium travel and tours company that has been providing a range of services and excelling since its inception in 2015. In a few years, Rara has grown substantially due to its customer-oriented services at affordable prices. From seasonal tour packages to personally tailored ones, Rara Adventure understands every traveler is unique in their needs and is more than happy to cater to everyone with utmost pride and gratefulness. With experienced staff, customer-based work ethic and a fleet of hotels and vehicles at their disposal, Rara Adventure is and if not should be your ideal travel partner.</p>
                <a href="{{ route('about') }}"><button class="btn btn-outline-success text-center p-1 px-4">Learn More</button></a>
            </div>
            <div class="col-md-6 pt-3">
                <!-- maps start -->
                <div>
                    <div class="heading-h1 pb-1 text-left">Explore us</div>
                    <div class="clearfix text-formatted field field--name-body field--type-text-with-summary field--label-hidden field__item">
                        <p>
                            <iframe allowfullscreen="" frameborder="0" height="450" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3471.3751896379936!2d82.06786071453604!3d29.53456618207073!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39a33797d29cebbd%3A0x356f86adb2228764!2sRara+Adventure+Pvt.+Ltd.!5e0!3m2!1sen!2snp!4v1543650129377" style="border:0; height: 350px;" width="100%"></iframe>
                        </p>
                    </div>
                </div>
                <!-- maps end -->
            </div>
        </div>
        </div>
    </div>

    <!-- services -->
    <div class="container px-5" style="margin-top: 50px;">
        <div class="row">
            <div class="col-md-6 p-2">
                <div class="row">
                    <div class="col-2">
                        <img src="https://bharaladventure.com/wp-content/uploads/2017/10/expert.png" class="img-fluid img-responsive">
                    </div>
                    <div class="col-10">
                        <span class="heading-h2" style="font-size: 20px;">Run By Local Experts</span>
                        <p style="font-size: 14px;">The company is run by team of multiligual local people who knows everything about the area.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 p-2">
                <div class="row">
                    <div class="col-2">
                        <img src="https://bharaladventure.com/wp-content/uploads/2017/10/customer-service.png" class="img-fluid img-responsive">
                    </div>
                    <div class="col-10">
                        <span class="heading-h2" style="font-size: 20px;">24/7 Customer Service</span>
                        <p style="font-size: 14px;">Our team never sleep for you, you can call us any time and we are ready to serve you anytime.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 p-2">
                <div class="row">
                    <div class="col-2">
                        <img src="https://bharaladventure.com/wp-content/uploads/2017/10/trip-choice.png" class="img-fluid img-responsive">
                    </div>
                    <div class="col-10">
                        <span class="heading-h2" style="font-size: 20px;">More Than 100 Trip To Choice</span>
                        <p style="font-size: 14px;">We have morethan 100 trip and packages to offer you with possibilites to customize for you.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 p-2">
                <div class="row">
                    <div class="col-2">
                        <img src="https://bharaladventure.com/wp-content/uploads/2017/10/eco-friendly.png" class="img-fluid img-responsive">
                    </div>
                    <div class="col-10">
                        <span class="heading-h2" style="font-size: 20px;">Nature Friendly</span>
                        <p style="font-size: 14px;">We can assure you a safest tour possible because with us you are in the hands of experts.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /services -->

    @endsection