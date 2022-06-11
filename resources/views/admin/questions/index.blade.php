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
                    <div class="col-sm-6">

                        <div class="form-group">
                            <label>Select Category</label>

                            <select class="form-control" name="category_id" id="category">
                                @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">All Questions</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Question</th>
                                        <th>Answer 1</th>
                                        <th>Answer 2</th>
                                        <th>Action</th>
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
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->


        <script type="text/javascript">
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $(document).ready(function () {
                $('#category').on('change',function(e) {
                    var cat_id = e.target.value;
                    $.ajax({
                        url:"{{ route('get_questions') }}",
                        type:"POST",
                        data: {
                            cat_id: cat_id
                        },
                        success:function (data) {
                            $('#subcategory').empty();
                            $.each(data.subcategories[0].subcategories,function(index,subcategory){
                                $('#subcategory').append('<option value="'+subcategory.id+'">'+subcategory.name+'</option>');
                            })
                        }
                    })
                });
            });
        </script>


@endsection
