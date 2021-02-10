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
    <div class="jumbotron-fluid">
        <div class="card">
            <img class="d-block w-100 img-fluid img-responsive card-img" src="{{asset('user/banner/plan.jpg')}}" style="height: 260px; opacity: 0.9;">
            <div class="mx-md-5 card-img-overlay d-flex flex-column justify-content-end mx-4">
                <div class="container mx-md-5 my-3 text-white" style="border-left: 4px solid #FA6903;">
                    <span class="heading-h2 text-white pt-md-5" style="font-size: 30px;">Plan Your Trip</span>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row pt-4 pb-4">
                <div class="col-md-7">
                    <form class="pt-3 pb-3" role="form" method="POST" action="{{route('storebook')}}">
                        @csrf
                        <div class="form-group pt-2">
                            <label for="name">Name<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="name" placeholder="Your Name" name="name">
                        </div>
                        <div class="form-group pt-2">
                            <label for="email">Email<span class="text-danger">*</span></label>
                            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                        </div>
                        <div class="form-group pt-2">
                            <label for="package">Destination<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="package" placeholder="Enter Destination" name="destination">
                        </div>
                        <div class="form-group pt-2">
                            <label for="num">Number of people<span class="text-danger">*</span></label>
                            <input type="number" class="form-control" id="num" name="num">
                        </div>
                        <div class="form-group pt-2">
                            <label for="phone">Contact No.<span class="text-danger">*</span></label>
                            <input type="tel" class="form-control" id="phone" name="phone">
                        </div>
                        <div class="form-group pt-2">
                            <label for="num">Message</label>
                            <textarea name="message" class="textarea form-control" placeholder="Leave a message"
                                      style="width: 100%; height: 150px; font-size: 16px; font-family: 'Roboto', sans-serif;line-height: 18px; padding: 10px;"></textarea>
                        </div>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @if (session()->has('success'))--}}
        <div class="alert-success" id="popup_notification">
            <strong>{!! trans('Booking Request Sent') !!}</strong>{{ session('success') }}
        </div>
    @endif
    @endsection
