@extends('layouts.app')

@section('content')

@include('admin/header')

<div class="content-wrapper">
	<div class="container-fluid">
		<!-- Card Start -->
        <div class="card card-primary">
            <h1 class="text-center pt-3 pb-2 bg-light" style="font-family: times new roman;">Add News</h1>
            <!-- form start -->
            <form role="form" method="POST" action="{{ route('news.store') }}" enctype="multipart/form-data">
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
                        <label for="category">Category</label>
                        <select name="category" class="form-control input-sm" id="category">
                            <option value="">--- Select Category ---</option>
                            @foreach ($categories as $key => $value)
                            <option value="{{ $key }}">{{ $value }}</option>
                            @endforeach
                        </select>
                    </div>
                    <!-- /category dropdown -->

                    <!-- subcategory dropdown -->
                    <div class="form-group">
                        <label for="subcategory">Sub Category</label>
                        <select name="subcategory" class="form-control input-sm" id="subcategory">
                            <option>-- Sub Category --</option>
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
    jQuery(document).ready(function ()
    {
            jQuery('select[name="category"]').on('change',function(){
               var categoryID = jQuery(this).val();
               if(categoryID)
               {
                  jQuery.ajax({
                     url : '/addnews/subcategory/' +categoryID,
                     type : "GET",
                     dataType : "json",
                     success:function(data)
                     {
                        console.log(data);
                        jQuery('select[name="subcategory"]').empty();
                        jQuery.each(data, function(key,value){
                           $('select[name="subcategory"]').append('<option value="'+ key +'">'+ value +'</option>');
                        });
                     }
                  });
               }
               else
               {
                  $('select[name="subcategory"]').empty();
               }
            });
    });
    </script>

@endsection