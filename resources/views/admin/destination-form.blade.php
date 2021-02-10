@extends('layouts.app')
@extends('admin.layout.header')
@section('content')
    <div class="content-wrapper">
        @if(Session::has('msg'))
            <div class="alert alert-success">
                {{Session::get('msg')}}
            </div>
        @endif
        <h1 class="text-center align-content-center">Add Destination</h1>
        <!-- Card Start -->
        <div class="card card-primary">
            <!-- form start -->
            <form role="form" method="POST" action="{{route('destination.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="title" placeholder="Enter title">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Insert Image</label>
                        <div class="input-group">
                            <input type="file" name="image" id="fileToUpload" class="form-control">
                        </div>
                    </div>
                    <section class="content">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="card card-outline card-success">
                            <div class="card-header">
                              <h3 class="card-title">
                                Brief Description
                                <small>(Short description of the place)</small>
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
                                <textarea class="textarea" name="brief" id="textarea-1" placeholder="Place some text here"
                                          style="width: 100%; height: 80px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 5px;"></textarea>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- /.col-->
                      </div>
                      <!-- ./row -->
                    </section>
                    <!-- /.content -->
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
                                <textarea class="textarea" name="description" id="textarea-2" placeholder="Place some text here"
                                          style="width: 100%; height: 80px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 5px;"></textarea>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- /.col-->
                      </div>
                      <!-- ./row -->
                    </section>
                    <!-- /.content -->
                    <!-- /.content -->
                <div class="form-group">
                    <label>Duration</label>
                    <input type="text" class="form-control" placeholder="Enter Duration" name="duration">
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
                                        <textarea class="textarea" name="itinerary" id="textarea-3" placeholder="Place itinerary here" name="itinerary" style="width: 100%; height: 80px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 5px;"></textarea>
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
                    <input type="text" class="form-control" name="price" placeholder="Price">
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
                                        <textarea class="textarea" name="priceinclude" id="textarea-4" placeholder="Place price includes here" name="priceinclude" style="width: 100%; height: 80px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 5px;"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.col-->
                    </div>
                    <!-- ./row -->
                    <div class="form-group">
                        <label>Banner</label>
                        <input type="text" class="form-control" name="banner" placeholder="if yes(1)/ if no(0)">
                    </div>
                    <div class="form-group">
                        <label>Gallery</label>
                        <input type="text" class="form-control" name="gallery" placeholder="if yes(1)/ if no(0)">
                    </div>
                    <div class="form-group">
                        <label>Navbar</label>
                        <input type="text" class="form-control" name="nav" placeholder="if trek(1)/ if tour(0)">
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <!-- /.content-wrapper -->
@endsection
