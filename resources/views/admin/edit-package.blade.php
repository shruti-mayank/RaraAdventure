@extends('layouts.app')
@extends('admin.layout.header')
@section('content')
    <div class="content-wrapper">
        @if(count($errors)>0)
            @foreach($errors->all() as $error)
                <p class="alert alert-danger">{{ $error }}</p>
            @endforeach
        @endif
        @if(Session::has('msg'))
            <div class="alert alert-success">
                {{Session::get('msg')}}
            </div>
        @endif
        <h1 class="text-center align-content-center">Edit Packages</h1>
        <!-- Card Start --> 
        <div class="card card-primary">
            <!-- form start -->
            <form role="form" method="POST" action="{{ route('updatepackage', $package->id) }}" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                
                <select name="destination_id" id="destination_id" class="form-control" value="{{ $package->destination_id }}">
                    <option value=""></option>
                    @foreach($destinations as $destination)
                    <option value="{{$destination->id}}">{{$destination->title}}</option>
                     @endforeach
                </select>
               
                <div class="form-group">
                    <label>Place</label>
                    <input type="text" class="form-control" placeholder="Enter title" name="title" id="title" value="{{ $package->title }}">
                </div>
                <div class="form-group">
                    <div class="container">
                        <img src="{{asset('user/packageimg')}}/{{$package->image}}" height="100px" width="100px">
                    </div>
                    <label for="exampleInputFile">Insert Image</label>
                    <div class="input-group">
                        <input type="file" name="image" id="fileToUpload" class="form-control" value="{{ $package->image }}">
                    </div>
                </div>                
                <!-- content -->
                <section class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-outline card-success">
                                <div class="card-header">
                                    <h3 class="card-title">
                                       Brief Description
                                       <small>(Short Description of the place)</small>
                                    </h3>
                                    <!-- tools box -->
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip"
                                                title="Collapse">
                                            <i class="fas fa-minus"></i></button>
                                        <button type="button" class="btn btn-tool btn-sm" data-card-widget="remove" data-toggle="tooltip"
                                                title="Remove">
                                            <i class="fas fa-times"></i></button>
                                    </div>
                                    <!-- /. tools -->
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body pad">
                                    <div class="mb-1">
                                        <textarea class="textarea" placeholder="Place some text here" id="textarea-1" name="brief" style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 5px;">{{ $package->brief }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.col-->
                    </div>
                    <!-- ./row -->
                </section>
                <!-- /.content -->
                <!-- content -->
                <section class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-outline card-success">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        Description
                                        <small>(Proper description of the place)</small>
                                    </h3>
                                    <!-- tools box -->
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip"
                                                title="Collapse">
                                            <i class="fas fa-minus"></i></button>
                                        <button type="button" class="btn btn-tool btn-sm" data-card-widget="remove" data-toggle="tooltip"
                                                title="Remove">
                                            <i class="fas fa-times"></i></button>
                                    </div>
                                    <!-- /. tools -->
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body pad">
                                    <div class="mb-1">
                                        <textarea class="textarea" placeholder="Place some text here" id="textarea-2" name="description" style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 5px;">{{ $package->description }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.col-->
                    </div>
                    <!-- ./row -->
                </section>
                <!-- /.content -->
                <div class="form-group">
                    <label>Duration</label>
                    <input type="text" class="form-control" name="duration" id="package" value="{{ $package->duration }}">
                </div>
                <!-- content -->
                <section class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-outline card-success">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        Itinerary
                                    </h3>
                                    <!-- tools box -->
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip"
                                                title="Collapse">
                                            <i class="fas fa-minus"></i></button>
                                        <button type="button" class="btn btn-tool btn-sm" data-card-widget="remove" data-toggle="tooltip"
                                                title="Remove">
                                            <i class="fas fa-times"></i></button>
                                    </div>
                                    <!-- /. tools -->
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body pad">
                                    <div class="mb-1">
                                        <textarea class="textarea" placeholder="Place itineraries here" id="textarea-3" name="itinerary" style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 5px;">{{ $package->itinerary }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.col-->
                    </div>
                    <!-- ./row -->
                </section>
                <!-- /.content -->
                <div class="form-group">
                    <label>Price</label>
                    <input type="text" class="form-control" name="price" id="price" placeholder="price" value="{{ $package->price }}">
                </div>
                <!-- content -->
                <section class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-outline card-success">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        Price Includes
                                    </h3>
                                    <!-- tools box -->
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip"
                                                title="Collapse">
                                            <i class="fas fa-minus"></i></button>
                                        <button type="button" class="btn btn-tool btn-sm" data-card-widget="remove" data-toggle="tooltip"
                                                title="Remove">
                                            <i class="fas fa-times"></i></button>
                                    </div>
                                    <!-- /. tools -->
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body pad">
                                    <div class="mb-1">
                                        <textarea class="textarea" placeholder="Place price includes here" id="textarea-4" name="priceinclude" style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 5px;">{{ $package->priceinclude }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.col-->
                    </div>
                    <!-- ./row -->
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-success">Update</button>
            </div>
            </form>
        </div>
            <!-- /.content-wrapper -->
@endsection
