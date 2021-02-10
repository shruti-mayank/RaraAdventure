@extends('layouts.app')
@extends('admin.layout.header')
@section('content')
    <style type="text/css">
        table tr td a{
            color: black;
        }
    </style>
    <!-- Main content -->
    <section class="content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h1 class="card-title" style="font-size: 30px;">Destinations</h1>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>S.N</th>
                                    <th>Places</th>
                                    <th class="text-center">Brief description</th>
                                    <th class="text-center">Description</th>
                                    <th class="text-center">Duration</th>
                                    <th class="text-center">Itinerary</th>
                                    <th class="text-center">Price</th>
                                    <th class="text-center">Price Include</th>
                                    <th class="text-center">Banner</th>
                                    <th class="text-center">Gallery</th>
                                    <th class="text-center">Navbar</th>
                                    <th colspan="2">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($destinations as $destination)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{$destination->title}}</td>
                                        <td>{{$destination->brief}}</td>
                                        <td>{{$destination->description}}</td>
                                        <td>{{$destination->duration}}</td>
                                        <td>{{$destination->itinerary}}</td>
                                        <td>{{$destination->price}}</td>
                                        <td>{{$destination->priceinclude}}</td>                                        
                                        <td>{{$destination->banner}}</td>                                        
                                        <td>{{$destination->gallery}}</td>
                                        <td>{{$destination->nav}}</td>
                                        <td><a href="{{route('destination.edit',$destination->id)}}"><span class="far fa-edit"> Edit</span></a></td>
                                        <td>
                                            <a href="{{route('deletedest',$destination->id)}}" onclick="return confirm('Are you sure?')"><span class="fas fa-trash"> Delete</span></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
@endsection
