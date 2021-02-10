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
                            <h1 class="card-title" style="font-size: 30px;">Reviews List</h1>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Reviews</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($reviews as $review)
                                    <tr>
                                        <td>{{ $review->name }}</td>
                                        <td>{{$review->review}}</td>
                                        <!-- <form id="delete-form-{{$review->id}}" method="POST" action="{{route('review.destroy', $review->id)}}" style="display: none;">
                                            @csrf
                                            {{method_field('DELETE')}}
                                        </form>
                                        <td><a href="" onclick="if(confirm('Delete this item???')){event.preventDefault();document.getElementById('delete-form-{{$review->id}}').submit();}else{event.preventDefault();}"><span class="fas fa-trash">Delete</span></a> -->

                                        <td>
                                       <a href="{{route('review.destroy',$review->id)}}" onclick="return confirm('are you sure?')"><span class="fas fa-trash"> Delete</span></a>
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
