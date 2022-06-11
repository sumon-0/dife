@extends('layouts.master')
@section('content')
    <div class="pt-table">
        <div class="pt-tablecell relative">

            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8">
                        <div class="page-title text-center">
                            <img width="100px" src="{{asset('frontend/img/DIFE_logo.png')}}" alt="fire">
                            <h2 style="font-size: 40px !important;">OSH  ই-টুল<span class="primary"> Registration</span> <span class="title-bg">DIEF</span></h2>
                            <p>OSH ই-টুল শুরু করতে অনুগ্রহ করে নিচের ফর্মটি পূরণ করুন</p>
                            <hr/>
                        </div>
                    </div>
                </div> <!-- /.row -->

                <div class="row">

                    <div class="col-xs-12 col-sm-8 col-md-8 col-md-offset-2 col-lg-offset-2">
                        @if ($message = Session::get('error_status'))
                            <div class="msg-success">{{$message}}</div>
                        @endif
                        <form class="row contact-form no-gutter" action="{{url('/osh-tool')}}" method="post">
                            @csrf
                            <div class="col-xs-12 col-sm-6">
                                <div class="input-field">
                                    <span class="input-icon"><i class="tf-profile-male"></i></span>
                                    <input type="text" class="form-control" name="owner_name"  placeholder="আপনার নাম লিখুন *" required>
                                </div>
                            </div> <!-- ./col- -->
                            <div class="col-xs-12 col-sm-6">
                                <div class="input-field">
                                    <span class= "input-icon"><i class="tf-envelope2"></i></span>
                                    <input type="text" class="form-control" name="company_name" placeholder="আপনার কোম্পানির নাম লিখুন *" required>
                                </div>
                            </div> <!-- ./col- -->

                            <div class="col-xs-12 col-sm-12">
                                <div class="input-field">
                                    <span class= "input-icon" ><i class="tf-pencil2"></i></span>
                                    <textarea name="address" class="form-control" placeholder="ফ্যাক্টরির ঠিকানা লিখুন"></textarea>
                                </div>
                            </div> <!-- ./col- -->
                            <div class="col-xs-12 col-sm-12 text-center">
                                <div class="input-field">
                                            <span class="btn-border">
                                                <button type="submit" class="btn btn-primary btn-custom-border text-uppercase">শুরু করুন</button>
                                            </span>
                                </div>

                            </div> <!-- ./col- -->
                        </form> <!-- /.row -->
                    </div> <!-- /.col- -->

                </div> <!-- /.row -->
            </div> <!-- /.container -->

        @include('footer')
            <!-- /.container -->

        </div> <!-- /.pt-tablecell -->
    </div> <!-- /.pt-table -->



@endsection