@extends('layouts.master')
@section('content')

    <div class="pt-table">
        <div class="pt-tablecell relative">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8">
                        <div class="page-title text-center" style="margin-bottom: 50px !important;">
                            <h2 style="font-size: 40px !important;">OSH  <span class="primary"> ই-টুল</span> <span class="title-bg" style="font-size: 100px !important;">DIEF</span></h2>

                        </div>
                    </div>
                </div> <!-- /.row -->
                <div class="row">



                    <form method="post" action="{{route('submit_feedback')}}">
                        @csrf
                        <div class="col-xs-12 col-sm-7 col-md-7 col-md-offset-1 col-lg-offset-2" style="border: 2px solid tomato;padding: 15px">
                            <div class="about-author">


                                <div id="acc-border">
                                    <h3 class="question" style="font-size: 20px">এই সমীক্ষা কি আপনার জন্য সহায়ক? </h3>

                                    <div style="padding: 12px">
                                        <table class="table">
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="hidden" name="fk_company_id" value="{{$company_id}}">

                                                        <input class="form-check-input" type="radio" name="feedback_answer" id="flexRadioDefault1" value="1" required>
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            হ্যাঁ
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="feedback_answer" id="flexRadioDefault2" value="0" required>
                                                        <label class="form-check-label" for="flexRadioDefault2">
                                                            না
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>



                                    </div>

                                </div>
                            </div> <!-- /.about-author -->


                            <button type="submit"  class="btn btn-success" style="margin-top: 10px;float: right">Finish</button>

                        </div> <!-- /.col -->
                    </form>



                </div> <!-- /.row -->
            </div> <!-- /.container -->


        @include('footer')
        <!-- /.container -->

        </div> <!-- /.pt-tablecell -->
    </div> <!-- /.pt-table -->



@endsection