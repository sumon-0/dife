@extends('admin.master')

@section('content')

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">

                <div class="row p-2">
                    <div class="col-10">
                        @if(session('status'))
                            <div class="alert alert-success alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                {{session('status')}}
                            </div>
                        @elseif(session('danger_status'))
                                <div class="alert alert-danger alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    {{session('danger_status')}}
                                </div>
                        @endif
                    </div>
                    <div class="col-2 float-right">
                        <a class="btn btn-success float-right" href="{{route('category.create')}}">Add New</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">All Categories</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Image</th>
                                        <th>Title</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($categories as $key=>$category)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td><img src="{{asset('storage/'.$category->image_file)}}" width="40px"></td>
                                        <td>{{$category->name}}</td>
                                        @if($category->status==1)
                                        <td>Active</td>
                                        @else
                                        <td>Inactive</td>
                                        @endif
                                        <td>
                                            <form action="{{ route('category.destroy') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="id" value="{{$category->id}}">
                                                <button type="submit" class="btn btn-sm btn-danger" role="button"><i class="fa fa-trash"></i></button>
                                            </form>
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
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->





@endsection
