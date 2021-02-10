@extends('layouts.app')

@section('content')

@include('admin/header')

<div class="content-wrapper">
	<div class="container-fluid">
		<!-- dropdown -->
		<div class="dropdown" id="news-dropdown">
			<button class="btn btn-secondary dropdown-toggle w-25" type="button" data-toggle="dropdown">समाचार</button>
			<ul class="dropdown-menu w-25">
				<a href="#vishesh"><li class="dropdown-item">विशेष</li></a>
				<a href="#vichar"><li class="dropdown-item">विचार</li></a>
				<a href="#rajniti"><li class="dropdown-item">राजनीति</li></a>
				<a href="#samaj"><li class="dropdown-item">समाज</li></a>
				<a href="#khel"><li class="dropdown-item">खेल</li></a>
				<a href="#manoranjan"><li class="dropdown-item">मनोरञ्जन</li></a>
				<a href="#artha"><li class="dropdown-item">अर्थ</li></a>
				<a href="#deshpradesh"><li class="dropdown-item">देश परदेश</li></a>
				<a href="#radio"><li class="dropdown-item">रेडियो कार्यक्रम</li></a>
				<a href="#kala"><li class="dropdown-item">कला</li></a>
				<a href="#sadak"><li class="dropdown-item">सडक र सवारी</li></a>
				<a href="#vishwa"><li class="dropdown-item">विश्व</li></a>
			</ul>	
		</div>
		<!-- /dropdown -->

		<!-- vishesh list -->		
        <div class="row mt-4" id="vishesh">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h1 class="card-title" style="font-size: 25px; font-weight: bold; padding-top: 10px; padding-bottom: -10px;">विशेष</h1>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>S.N</th>
                                <th>News Title</th>
                                <th>Category</th>
                                <th>Sub Category</th>
                                <th colspan="2">Action</th>
                            </tr> 
                            </thead>
                            <tbody>
                                @foreach($mainnews as $news)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $news->title }}</td>
                                        <td>{{ $news->category }}</td>
                                        <td>{{ $news->subcategory }}</td>
                                        <td><a href=""><span> View</span></a></td>
                                        <td><a href="{{route('news.edit',$news->id)}}"><span class="far fa-edit"> Edit</span></a></td>
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
		<!-- /vishesh list -->

		<!-- vichar list -->
		<div class="row mt-4" id="vichar">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h1 class="card-title" style="font-size: 25px; font-weight: bold; padding-top: 10px; padding-bottom: -10px;">विचार</h1>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>S.N</th>
                                <th>News Title</th>
                                <th>Category</th>
                                <th>Sub Category</th>
                                <th colspan="2">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
		<!-- /vichar list -->

		<!-- rajniti list -->
		<div class="row mt-4" id="rajniti">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h1 class="card-title" style="font-size: 25px; font-weight: bold; padding-top: 10px; padding-bottom: -10px;">राजनीति</h1>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>S.N</th>
                                <th>News Title</th>
                                <th>Category</th>
                                <th>Sub Category</th>
                                <th colspan="2">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
		<!-- /rajniti list -->

		<!-- samaj list -->
		<div class="row mt-4" id="samaj">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h1 class="card-title" style="font-size: 25px; font-weight: bold; padding-top: 10px; padding-bottom: -10px;">समाज</h1>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>S.N</th>
                                <th>News Title</th>
                                <th>Category</th>
                                <th>Sub Category</th>
                                <th colspan="2">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
		<!-- /samaj list -->

		<!-- khel list -->
		<div class="row mt-4" id="khel">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h1 class="card-title" style="font-size: 25px; font-weight: bold; padding-top: 10px; padding-bottom: -10px;">खेल</h1>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>S.N</th>
                                <th>News Title</th>
                                <th>Category</th>
                                <th>Sub Category</th>
                                <th colspan="2">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /khel list -->

		<!-- manoranjan list -->
		<div class="row mt-4" id="manoranjan">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h1 class="card-title" style="font-size: 25px; font-weight: bold; padding-top: 10px; padding-bottom: -10px;">मनोरञ्जन</h1>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>S.N</th>
                                <th>News Title</th>
                                <th>Category</th>
                                <th>Sub Category</th>
                                <th colspan="2">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /manoranjan list -->

		<!-- artha list -->
		<div class="row mt-4" id="artha">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h1 class="card-title" style="font-size: 25px; font-weight: bold; padding-top: 10px; padding-bottom: -10px;">अर्थ</h1>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>S.N</th>
                                <th>News Title</th>
                                <th>Category</th>
                                <th>Sub Category</th>
                                <th colspan="2">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /artha list -->

		<!-- deshpradesh list -->
		<div class="row mt-4" id="deshpradesh">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h1 class="card-title" style="font-size: 25px; font-weight: bold; padding-top: 10px; padding-bottom: -10px;">देश परदेश</h1>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>S.N</th>
                                <th>News Title</th>
                                <th>Category</th>
                                <th>Sub Category</th>
                                <th colspan="2">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /deshpradesh list -->

		<!-- radio list -->
		<div class="row mt-4" id="radio">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h1 class="card-title" style="font-size: 25px; font-weight: bold; padding-top: 10px; padding-bottom: -10px;">रेडियो कार्यक्रम</h1>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>S.N</th>
                                <th>News Title</th>
                                <th>Category</th>
                                <th>Sub Category</th>
                                <th colspan="2">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /radio list -->

		<!-- kala list -->
		<div class="row mt-4" id="kala">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h1 class="card-title" style="font-size: 25px; font-weight: bold; padding-top: 10px; padding-bottom: -10px;">कला</h1>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>S.N</th>
                                <th>News Title</th>
                                <th>Category</th>
                                <th>Sub Category</th>
                                <th colspan="2">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
		<!-- /kala list -->

		<!-- sadak list -->
		<div class="row mt-4" id="sadak">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h1 class="card-title" style="font-size: 25px; font-weight: bold; padding-top: 10px; padding-bottom: -10px;">सडक र सवारी</h1>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>S.N</th>
                                <th>News Title</th>
                                <th>Category</th>
                                <th>Sub Category</th>
                                <th colspan="2">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /sadak list -->

		<!-- vishwa list -->
		<div class="row mt-4" id="vishwa">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h1 class="card-title" style="font-size: 25px; font-weight: bold; padding-top: 10px; padding-bottom: -10px;">विश्व</h1>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>S.N</th>
                                <th>News Title</th>
                                <th>Category</th>
                                <th>Sub Category</th>
                                <th colspan="2">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
		<!-- /vishwa list -->
	</div>
</div>

@endsection 