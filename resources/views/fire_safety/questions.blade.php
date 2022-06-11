@extends('layouts.master')
@section('content')

    <style>
        .box{
            color: #fff;
            padding: 20px;
            display: none;
            margin-top: 20px;
        }
        .no{ background: #ff0000; }
        .yes{ background: #228B22; }
        label{ margin-right: 15px; }

    </style>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function(){
            $('input[type="radio"]').click(function(){
                var inputValue = $(this).attr("value");
                var targetBox = $("." + inputValue);
                $(".box").not(targetBox).hide();
                $(targetBox).show();
            });
        });
    </script>


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

                    <div class="col-xs-12 col-md-3">
                        <div class="history-block">
                            <div class="section-title light clear">
                                <h3>সমস্ত প্রশ্ন</h3>
                            </div>
                            <!-- /.section-title -->

                            @php
                                $no_of_question = \Request::segment(2);
                                //dd($no_of_question);
                                if($no_of_question!=NULL) {
                                $questions_list=\App\Models\Questions::where('fk_category_id',1)->get()->slice(0,$no_of_question);
                                }
                                else {
                                $questions_list=\App\Models\Questions::where('fk_category_id',1)->get()->slice(0,1);

                                }


                            @endphp

                            <div class="history-scroller">
                                @foreach($questions_list as $key=>$question_list)
                                <div class="history-item">

                                    <div class="history-text">
                                        <p>{{$key+1}}. {!! $question_list->question !!}</p>

                                    </div>
                                </div>
                                <!-- /.history-item -->
                                @endforeach
                            </div>


                        </div> <!-- /.history-block -->

                    </div> <!-- /.col -->

                    <form method="post" action="{{route('submit_answer')}}">
                        @csrf
                        <div class="col-xs-12 col-md-6" style="border: 2px solid tomato;padding: 15px">
                            <div class="about-author">


                                <div id="acc-border">
                                    <h3 class="question" style="font-size: 20px">{!! $question->question !!} </h3>

                                    <div style="padding: 12px">
                                        <div class="form-check">
                                            <input type="hidden" name="fk_company_id" value="{{$company_id}}">
                                            <input type="hidden" name="question_no" value="{{$question->id}}">
                                            <input class="form-check-input" type="radio" name="selected_answer" id="flexRadioDefault1" value="yes" required>
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                হ্যাঁ, তাহলে কি ঝুকিমুক্ত?
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="selected_answer" id="flexRadioDefault2" value="no" required>
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                না, তাহলে করনীয় কি?
                                            </label>
                                        </div>
                                    </div>

                                </div>
                            </div> <!-- /.about-author -->

                            <div class="yes box">{!! $answer->answer_one !!}</div>
                            <div class="no box">{!! $answer->answer_two !!}</div>

                            <button type="submit"  class="btn btn-success" style="margin-top: 10px;float: right">Next</button>

                        </div> <!-- /.col -->
                    </form>


                    <div class="col-xs-12 col-md-3">
                        <div class="section-title clear">
                            <h3>Progress summary</h3>
                        </div>
                        <div class="skill-wrapper">
                            <div class="progress clear">
                                <div class="skill-name"> {{count($questions_list)-1}} answered out of {{$total_questions}}</div>
                                <div class="skill-bar">
                                    <div class="bar"></div>
                                </div>
                                <div class="skill-lavel" data-skill-value="@if(count($questions_list)>1){{((count($questions_list)-1)/$total_questions)*100}}
                                                                           @else {{"0"}}                         @endif%"></div>
                            </div> <!-- /.progress -->

                        </div> <!-- /.skill-wrapper -->
                    </div> <!-- /.col -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->


        @include('footer')
        <!-- /.container -->

        </div> <!-- /.pt-tablecell -->
    </div> <!-- /.pt-table -->



@endsection