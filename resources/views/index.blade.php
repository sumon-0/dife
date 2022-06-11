@extends('layouts.master')
@section('content')
    <div class="pt-table">
        <div class="pt-tablecell page-services relative">
            {{--<a href="./" class="page-close"><i class="tf-ion-close"></i></a>--}}
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-lg-offset-1 col-lg-10">
                        <div class="page-title text-center">
                            <h2><img width="100px" src="{{asset('frontend/img/DIFE_logo.png')}}" alt="dife"> ডাইফ OSH <span class="primary">ই-টুল</span> <span class="title-bg">DIFE</span></h2>
                            <ul class="text-left" style="border-top: 4px solid #FA6862;padding-top: 15px">
                                <li>একটি কারখানা তাদের নিজস্ব রিস্ক আসেসমেন্ট এর মাধ্যমে ঝুঁকি নিরূপণ করতে পারবে।</li>
                                <li>রিস্ক অ্যাসেসমেন্ট পরবর্তী কারখানার পেশাগত সেফটি বজায় রাখার জন্য কি কি প্রয়োজনীয় পদক্ষেপ গ্রহণ করা প্রয়োজন সে বিষয়ে একটি সম্যক সহযোগিতা/গাইডলাইন এই ই-টুল প্রদান করবে।</li>
                            </ul>
                        </div>

                        <div class="hexagon-menu services clear">
                            <a href="/fire-safety">
                            <div class="service-hex">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 372 424.5" style="enable-background:new 0 0 372 424.5;" xml:space="preserve">
                                            <g>
                                                <polygon class="st0" points="359.9,314.1 186.9,414 14,314.1 14,114.4 186.9,14.6 359.9,114.4"/>
                                                <polygon class="st1" points="331.2,297.6 186.9,380.9 42.6,297.6 42.6,131 186.9,47.6 331.2,131"/>
                                            </g>
                                        </svg>

                                <div class="content">
                                        <div class="icon">
                                            <i class="et-line icon-lightbulb"></i>
                                        </div>
                                        <h4>অগ্নি <br> নিরাপত্তা</h4>
                                        <img width="50px" src="{{asset('frontend/img/fire-extinguisher.png')}}" alt="fire">
                                </div>
                            </div>
                            </a>
                            <div class="service-hex">

                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 372 424.5" style="enable-background:new 0 0 372 424.5;" xml:space="preserve">
                                            <g>
                                                <polygon class="st0" points="359.9,314.1 186.9,414 14,314.1 14,114.4 186.9,14.6 359.9,114.4"/>
                                                <polygon class="st1" points="331.2,297.6 186.9,380.9 42.6,297.6 42.6,131 186.9,47.6 331.2,131"/>
                                            </g>
                                        </svg>
                                <div class="content">
                                    <div class="icon">
                                        <i class="et-line icon-mobile"></i>
                                    </div>
                                    <h4>বৈদ্যুতিক<br>  নিরাপত্তা</h4>
                                    <img width="50px" src="{{asset('frontend/img/gloves.png')}}" alt="electrical">
                                </div>
                            </div>
                            <div class="service-hex">

                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 372 424.5" style="enable-background:new 0 0 372 424.5;" xml:space="preserve">
                                            <g>
                                                <polygon class="st0" points="359.9,314.1 186.9,414 14,314.1 14,114.4 186.9,14.6 359.9,114.4"/>
                                                <polygon class="st1" points="331.2,297.6 186.9,380.9 42.6,297.6 42.6,131 186.9,47.6 331.2,131"/>
                                            </g>
                                        </svg>
                                <div class="content">
                                    <div class="icon">
                                        <i class="et-line icon-profile-male"></i>
                                    </div>
                                    <h4>ভবন<br> নিরাপত্তা</h4>
                                    <img width="50px" src="{{asset('frontend/img/building.png')}}" alt="building">
                                </div>
                            </div>
                            <div class="service-hex">

                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 372 424.5" style="enable-background:new 0 0 372 424.5;" xml:space="preserve">
                                            <g>
                                                <polygon class="st0" points="359.9,314.1 186.9,414 14,314.1 14,114.4 186.9,14.6 359.9,114.4"/>
                                                <polygon class="st1" points="331.2,297.6 186.9,380.9 42.6,297.6 42.6,131 186.9,47.6 331.2,131"/>
                                            </g>
                                        </svg>
                                <div class="content">
                                    <div class="icon">
                                        <i class="et-line icon-heart"></i>
                                    </div>
                                    <h4>রাসায়নিক <br> নিরাপত্তা</h4>
                                    <img width="50px" src="{{asset('frontend/img/chemical.png')}}" alt="chemical">
                                </div>
                            </div>
                            <div class="service-hex">

                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 372 424.5" style="enable-background:new 0 0 372 424.5;" xml:space="preserve">
                                            <g>
                                                <polygon class="st0" points="359.9,314.1 186.9,414 14,314.1 14,114.4 186.9,14.6 359.9,114.4"/>
                                                <polygon class="st1" points="331.2,297.6 186.9,380.9 42.6,297.6 42.6,131 186.9,47.6 331.2,131"/>
                                            </g>
                                        </svg>
                                <div class="content">
                                    <div class="icon">
                                        <i class="et-line icon-hotairballoon"></i>
                                    </div>
                                    <h4>বয়লার <br> নিরাপত্তা</h4>
                                    <img width="50px" src="{{asset('frontend/img/boiler.png')}}" alt="boiler">
                                </div>
                            </div>
                        </div>
<div class="text-center">
    <p><br>
        <span id="s1">ডিজাইন ও ডেভেলপ করেছেনঃ</span><br>
        <span id="s1">সিকদার মোহাম্মদ তৌহিদুল হাসান, সহকারি মহাপরিদর্শক (সেফটি)</span><br>
        <span id="s1">কলকারখানা ও প্রতিষ্ঠান পরিদর্শন অধিদপ্তর</span><br>
        <span id="s1">শ্রম ও কর্মসংস্থান মন্ত্রণালয়</span>

    </p>
</div>
                    </div> <!-- /.col-xs-12 -->

                </div> <!-- /.row -->
            </div> <!-- /.container -->

            @include('footer')

        </div> <!-- /.pt-tablecell -->
    </div> <!-- /.pt-table -->
@endsection