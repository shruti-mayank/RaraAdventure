@extends('layout.main')
@section('content')
    <div class="jumbotron-fluid">
        <div class="card">
            <img class="d-block w-100 img-fluid img-responsive card-img" src="{{asset('user/banner/home.jpg')}}" style="height: 260px; opacity: 0.9;">
            <div class="mx-md-5 card-img-overlay d-flex flex-column justify-content-end mx-4">
                <div class="container mx-md-5 my-3 text-white" style="border-left: 4px solid #FA6903;">
                    <span class="heading-h2 text-white pt-md-5" style="font-size: 30px;">About Us</span>
                </div>
            </div>
        </div>
        <div class="container p-3">
           <div class="row">
               <div class="col-md-8" style="font-size: 15px; font-family: 'Roboto', sans-serif;">
                   <p class="pt-3">Rara Adventure is Nepal’s leading tour operator. It has been providing excellent travel and tours services in the country. Among the range of tourism activities, it provides personally tailored tour packages. Everyone from a budget traveler to a luxurious holiday seeker will be able to web together their perfect Nepali adventure. Established in 2015, the aim of this company is to make its client’s travel fun, safe, organized and memorable. From adventurous mountain treks to air conditioned village safaris, Rara seeks to serve its customers in the best of its ability.
                       <br><br>With headquarters all around the country, a representative will never be too far to cater to the needs of its clients and assist them in their journey. Rara adventure originally started with the vision of promoting the virgin, unconquered beauty of the Rara Lake and the regions around it but it has expanded exponentially due to its customer driven service and its budget friendly approach. Rara Adventures is also a GSA for Sita Air which holds direct flights from Nepalgunj to the Rara region.
                       <br><br>Now Rara Adventure has packages for destinations all around the country but it doesn’t just operate with the packages. Rara Adventures caters to all your needs from domestic and international air tickets bookings to adventure sports bookings like rafting, bungy jumping or even paragliding. You can customize your own package according to your needs. With experienced staff, customer based work ethic and a fleet of hotels and vehicles at their disposal, Rara Adventure is your perfect partner either if you’re an international tourist or a domestic tourist.</p>
               </div>
           </div>
        </div>
    </div>
    @endsection
