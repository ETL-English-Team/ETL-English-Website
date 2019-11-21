@extends('user.master-layout')
@section('content')
<link href="assets/css/vocabulary.css" rel="stylesheet" type="text/css">
    <!-- Start content -->
<div class="content">
        <div class="container"><div class="list-items-box">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-header-title">
                        <h4 class="pull-left page-title">Level 1 - Dụng cụ học tập</h4>
                        <ol class="hidden-xs breadcrumb pull-right">
                            <button type="submit" class="btn-link">Bắt đầu kiểm tra</button>
                        </ol>
                        <div class="clearfix"></div>

                        {{-- button bắt đầu kiểm tra --}}
                        <div class="row hidden-sm hidden-md hidden-lg">
                            <div class="col-xs-3"></div>
                            <button type="submit" class="btn-success col-xs-6 btn-begin-test">Bắt đầu kiểm tra</button>
                            <div class="col-xs-3"></div>
                        </div>
                    </div>
                </div>
            </div>

            

            <div class="row">

                {{-- Begin of vocabulary box --}}
                <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 item-box">
                    <div class="flip-container" onclick="this.classList.toggle('focus');playAudio();">
                        <div class="flipper">

                            {{-- Begin of front face --}}
                            <div class="panel panel-primary text-center vocabulary-box front">
                                <div class="panel-heading">
                                    <h4 class="panel-title">1. Family</h4>
                                </div>
                                <div class="panel-body">
                                    <div class="panel-vocabulary-img">
                                        <img class="vocabulary-img" src="assets/images/MagicSoundBox.jpg">
                                    </div>
                                    <div class="col-sm-6 col-lg-5 panel-vocabulary-detail">
                                        _____________
                                        <br>(n) Gia đình
                                        <br>[ˈfam(ə)lē]
                                    </div>
                                </div>
                            </div>
                            {{-- End of front face --}}

                            {{-- Begin of back face --}}
                            <div class="panel panel-primary text-center vocabulary-box back">
                                <div class="panel-heading">
                                    <h4 class="panel-title">1. Family</h4>
                                </div>
                                <div class="panel-body">
                                    <div class="panel-vocabulary-img-backview">
                                        <img class="vocabulary-img-backview" src="assets/images/sound-vector-icon.jpg">
                                    </div>
                                    <div class="col-sm-6 col-lg-5 panel-vocabulary-detail-backview">
                                        <br>Các nghĩa khác:
                                        <br>(n) Gia đình
                                        <br>(n) Gia đình
                                        <br>Ví dụ: My family is the best in my heart
                                    </div>
                                </div>
                            </div>
                            {{-- End of back face --}}

                        </div>
                    </div>
                </div>
                {{-- End of vocabulary box --}}

                {{-- Begin of vocabulary box --}}
                <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 item-box">
                    <div class="flip-container" onclick="this.classList.toggle('focus');playAudio();">
                        <div class="flipper">

                            {{-- Begin of front face --}}
                            <div class="panel panel-primary text-center vocabulary-box front">
                                <div class="panel-heading">
                                    <h4 class="panel-title">1. Family</h4>
                                </div>
                                <div class="panel-body">
                                    <div class="panel-vocabulary-img">
                                        <img class="vocabulary-img" src="assets/images/MagicSoundBox.jpg">
                                    </div>
                                    <div class="col-sm-6 col-lg-5 panel-vocabulary-detail">
                                        _____________
                                        <br>(n) Gia đình
                                        <br>[ˈfam(ə)lē]
                                    </div>
                                </div>
                            </div>
                            {{-- End of front face --}}

                            {{-- Begin of back face --}}
                            <div class="panel panel-primary text-center vocabulary-box back">
                                <div class="panel-heading">
                                    <h4 class="panel-title">1. Family</h4>
                                </div>
                                <div class="panel-body">
                                    <div class="panel-vocabulary-img-backview">
                                        <img class="vocabulary-img-backview" src="assets/images/sound-vector-icon.jpg">
                                    </div>
                                    <div class="col-sm-6 col-lg-5 panel-vocabulary-detail-backview">
                                        <br>Các nghĩa khác:
                                        <br>(n) Gia đình
                                        <br>(n) Gia đình
                                        <br>Ví dụ: My family is the best in my heart
                                    </div>
                                </div>
                            </div>
                            {{-- End of back face --}}

                        </div>
                    </div>
                </div>
                {{-- End of vocabulary box --}}

            </div>
        </div></div> <!-- container -->

    </div> <!-- content -->
@endsection