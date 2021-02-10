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
                            <h1 class="card-title" style="font-size: 30px;">Booking List</h1>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Destination</th>
                                    <th>Number</th>
                                    <th>Phone</th>
                                    <th>Message</th>
                                    <th colspan="2">Action</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($books as $book)
                                    <tr>
                                        <td>{{$book->name}}</td>
                                        <td>{{$book->email}}</td>
                                        <td>{{$book->destination}}</td>
                                        <td>{{$book->num}}</td>
                                        <td>{{$book->phone}}</td>
                                        <td>{{$book->message}}</td>
                                        <td><a href="{{route('book.edit',$book->id)}}"><span class="far fa-edit"> Edit</span></a></td>
                                        <!-- <form id="delete-form-{{$book->id}}" method="POST" action="{{route('book.destroy', $book->id)}}" style="display: none;">
                                            @csrf
                                            {{method_field('DELETE')}}
                                        </form>
                                        <td><a href="" onclick="if(confirm('Delete this item???')){event.preventDefault();document.getElementById('delete-form-{{$book->id}}').submit();}else{event.preventDefault();}"><span class="fas fa-trash">Delete</span></a> -->

                                        <td>
                                       <a href="{{route('book.destroy',$book->id)}}" onclick="return confirm('are you sure?')"><span class="fas fa-trash"> Delete</span></a>
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
