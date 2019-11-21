@extends('user.master-layout')
@section('content')
<link href="assets/css/home.css" rel="stylesheet" type="text/css">
    <!-- Start content -->
<div class="content">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-header-title">
                        <h4 class="pull-left page-title">Trang chủ</h4>
                        <ol class="breadcrumb pull-right">
                            <li><a href="#">ETL English</a></li>
                            <li class="active">Trang chủ</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="hidden-xs col-sm-6 col-lg-3">
                    <div class="panel panel-primary text-center">
                        <div class="panel-heading">
                            <h4 class="panel-title">Level hiện tại</h4>
                        </div>
                        <div class="panel-body">
                            <h3 class=""><b>Level 1</b></h3>
                            <p class="text-muted">Cấp độ "<b>Tập sự</b>"</p>
                        </div>
                    </div>
                </div>

                <div class="hidden-xs col-sm-6 col-lg-3">
                    <div class="panel panel-primary text-center">
                        <div class="panel-heading">
                            <h4 class="panel-title">Số từ đã học</h4>
                        </div>
                        <div class="panel-body">
                            <h3 class=""><b>255</b></h3>
                            <p class="text-muted"><b>255</b> từ học được trong 23 ngày</p>
                        </div>
                    </div>
                </div>

                <div class="hidden-xs col-sm-6 col-lg-3">
                    <div class="panel panel-primary text-center">
                        <div class="panel-heading">
                            <h4 class="panel-title">Tỉ lệ tăng cấp thành công</h4>
                        </div>
                        <div class="panel-body">
                            <h3 class=""><b>50%</b></h3>
                            <p class="text-muted"><b>50%</b> tỉ lệ tăng cấp thành công</p>
                        </div>
                    </div>
                </div>

                <div class="hidden-xs col-sm-6 col-lg-3">
                    <div class="panel panel-primary text-center">
                        <div class="panel-heading">
                            <h4 class="panel-title">Kỉ lục cá nhân</h4>
                        </div>
                        <div class="panel-body">
                            <h3 class=""><b>255 điểm</b></h3>
                            <p class="text-muted">Kỉ lục trò "<b>Magic Image Box</b>"</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4">
                    <figure class="snip1104 red">
                        <img src="assets/images/HocTuVungTheoChuDe.jpg" style="width:100%; height:300px; margin-bottom:20px">
                        <figcaption>
                            <h2><span>Play now</span></h2>
                        </figcaption>
                        <a href="#"></a>
                    </figure>
                </div>

                <div class="col-sm-4">
                    <figure class="snip1104 blue">
                        <img src="assets/images/MagicSoundBox.jpg" style="width:100%; height:300px; margin-bottom:20px">
                        <figcaption>
                            <h2><span>Play now</span></h2>
                        </figcaption>
                        <a href="#"></a>
                    </figure>
                </div>

                <div class="col-sm-4">
                    <figure class="snip1104 yellow">
                        <img src="assets/images/MagicImageBox.jpg" style="width:100%; height:300px; margin-bottom:20px">
                        <figcaption>
                          <h2><span>Play now</span></h2>
                        </figcaption>
                        <a href="#"></a>
                    </figure>
                </div>
            </div>


            


        </div> <!-- container -->

    </div> <!-- content -->
@endsection