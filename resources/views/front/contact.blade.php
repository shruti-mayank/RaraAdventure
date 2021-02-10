@extends('layout.main')
@section('content')
    <style>
        ul li{
            padding-top: 12px;
        }
        h4{
            font-family: 'Oswald', sans-serif;
        }
    </style>
    <div class="jumbotron-fluid">
        <div class="card">
            <img class="d-block w-100 img-fluid img-responsive card-img" src="{{asset('user/banner/contact.jpg')}}" style="height: 260px; opacity: 0.9;">
            <div class="mx-md-5 card-img-overlay d-flex flex-column justify-content-end mx-4">
                <div class="container mx-md-5 my-3 text-white" style="border-left: 4px solid #FA6903;">
                    <span class="heading-h2 text-white pt-md-5" style="font-size: 30px;">Contact Us</span>
                </div>
            </div>
        </div>
        <div class="container pt-3" style="font-family: 'Roboto', sans-serif;">
            <div class="row">
                <div class="col-md-7">
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="pt-3" style="list-style-type: none;">
                                <h4 class="text-success">Oficial Contacts</h4>
                                <li><b>Kathmandu Office:</b> 01-4422070</li>
                                <li><b>Nepalgunj Office:</b> 081-565036</li>
                                <li><b>Surkhet Office:</b> 083-522539</li>
                                <li><b>Humla Office:</b> 9748162948</li>
                                <li><b>Mugu Office:</b> 9864944586, 9864944583</li>
                                <li><b>(Rara Guest House), Dolpa Office:</b> 9748162949</li>
                            </ul>
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-5">
                            <ul class="pt-3" style="list-style-type: none;">
                                <h4 class="text-success">Phone</h4>
                                <li>+977 9851168993</li>
                                <h4 class="text-success pt-4">Online Support</h4>
                                <li><i class="fas fa-envelope"></i> &nbsp; <span>raraadventure17@gmail.com</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
