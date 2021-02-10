@extends('layouts.app')

@section('content')

@include('admin/header')

<div class="content-wrapper">
	<div class="container-fluid">
		<!-- Card Start -->
        <div class="card card-primary">
            <!-- form start -->
            <form role="form" method="POST" action="" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <!-- Title -->
                    <div class="form-group">
                        <div class="form-group">
                            <label>News title</label>
                            <input type="text" class="form-control" name="title" placeholder="Enter title">
                        </div>
                    </div>
                    <!-- /title -->

                    <!-- description -->
                    <div class="form-group">
                        <div class="form-group">
                            <label>News description</label>
                            <textarea class="textarea p-2" name="description" id="description" placeholder="Place news description here" style="width: 100%; height: 120px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 5px;"></textarea>
                        </div>
                    </div>
                    <!-- /description -->

                    <!-- image -->
                    <div class="form-group">
                        <label for="exampleInputFile">Insert Image</label>
                        <div class="input-group">
                            <input type="file" name="image" id="fileToUpload" class="form-control">
                        </div>
                    </div>
                    <!-- /image -->

                    <!-- secondary image -->
                    <div class="form-group">
                        <label for="exampleInputFile">Insert Secondary Image</label>
                        <div class="input-group">
                            <input type="file" name="sec-img" id="fileToUpload" class="form-control">
                        </div>
                    </div>
                    <!-- /secondary image -->

                    <!-- editor's name -->
                    <div class="form-group">
                         <div class="form-group">
                            <label>Editor's Name</label>
                            <input type="text" class="form-control" name="editor" placeholder="Enter Editor's Name">
                        </div>
                    </div>
                    <!-- editor's name -->

                    <!-- category dropdown -->
                    <div class="form-group">
                        <label for="">Category</label>
                        <select name="category" class="form-control input-sm" id="category">
                            <option value=""></option>
                             @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{$category->name}}</option>
                             @endforeach
                        </select>
                    </div>
                    <!-- /category dropdown -->

                    <!-- subcategory dropdown -->
                    <div class="form-group">
                        <label>Sub Category</label>
                        <select name="subcategory" class="form-control input-sm" id="subcategory">
                            <option value=""></option>
                        </select>
                    </div>
                    <!-- /subcategory dropdown -->
                   
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
            <!-- /form start -->
        </div>
        <!-- /card start -->
	</div>
</div>

<script type="text/javascript">
    $('#category').on('change', function(e){
        console.log(e);

        var cat_id = e.target.value;

        // ajax
        $.get('/ajax-subcat?cat_id=' + cat_id, function(data){
            // success data
            console.log(data);

            // $('#subcategory').empty();
            // $.each(data,function(index, subcatObj){
            //     $('subcategory').append('<option value="'+subcatObj.id+'">'+subcatObj.name+'</option>');
            // });
        });
    });
</script>

@endsection