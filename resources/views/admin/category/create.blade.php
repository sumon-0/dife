@extends('admin.master')
@section('content')
    <div class="row justify-content-md-center">
        <div class="col-md-8 mt-3">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Add Category</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="post" action="{{route('category.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <x-auth-validation-errors class="mb-4 text-danger" :errors="$errors" />
                        <div class="form-group">
                            <label for="exampleInputEmail1">Category Name</label>
                            <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="exampleInputEmail1" placeholder="Enter Category Name">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Status</label>
                            <select name="status" class="form-control">
                                <option disabled>Please Select Status</option>
                                <option value="1" selected>Active</option>
                                <option value="0">Inactive</option>
                            </select>

                        </div>

                        <div class="form-group">
                            <label for="exampleInputFile">Category Image</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="exampleInputFile" name="image_file">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Upload</span>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            <!-- /.card -->


        </div>
    </div>

@endsection