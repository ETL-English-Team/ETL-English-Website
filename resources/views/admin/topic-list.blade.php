@extends('admin.master-layout')
@section('content')
<link href="assets/css/topic-list.css" rel="stylesheet" type="text/css">
    <!-- Start content -->
<div class="content">
    <div class="container"><div class="list-items-box">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-header-title">
                    <h4 class="pull-left page-title">Quản lý chủ đề</h4>
                    <ol class="hidden-xs breadcrumb pull-right">
                        <button type="submit" class="btn-link">Thêm chủ đề</button>
                    </ol>
                    <div class="clearfix"></div>

                    {{-- button bắt đầu kiểm tra --}}
                    <div class="row hidden-sm hidden-md hidden-lg">
                        <div class="col-xs-3"></div>
                        <button type="submit" class="btn-success col-xs-6 btn-begin-test">Thêm chủ đề</button>
                        <div class="col-xs-3"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">

            {{-- Begin of topic list --}}
            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                <div class="panel panel-primary text-center">
                    <div class="panel-heading">
                        <h4 class="panel-title">Danh sách chủ đề</h4>
                    </div>
                    <div class="panel-body" style="padding-left:0; padding-right:0">
                                         
                        {{-- begin of topic panel --}}
                        <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">                                   
                            <div class="panel panel-primary text-center">                                                                           
                                <div class="panel-body panel-topic" style="padding:10px;">
                                    <img src="assets//images/MagicSoundBox.jpg" alt="" class="topic-img">      
                                    <div class="topic-title">
                                        Chủ đề <b>Gia đình</b>
                                    </div>                  
                                    <div class="col-xs-6">
                                        <button type="submit" class="btn-warning btn-update-topic">Sửa</button>
                                    </div> 
                                    <div class="col-xs-6">
                                        <button type="submit" class="btn-danger btn-delete-topic">Xóa</button>
                                    </div>
                                    <div class="col-xs-12">
                                        <button type="submit" class="btn-info btn-detail-topic">Xem chi tiết</button>
                                    </div>                
                                </div>                                 
                            </div>
                        </div>
                        {{-- end of topic panel --}}

                        <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">                                   
                            <div class="panel panel-primary text-center">                                                                           
                                <div class="panel-body panel-topic" style="padding:10px;">
                                    <img src="assets//images/MagicSoundBox.jpg" alt="" class="topic-img">      
                                    <div class="topic-title">
                                        Chủ đề <b>Gia đình</b>
                                    </div>                  
                                    <div class="col-xs-6">
                                        <button type="submit" class="btn-warning btn-update-topic">Sửa</button>
                                    </div> 
                                    <div class="col-xs-6">
                                        <button type="submit" class="btn-danger btn-delete-topic">Xóa</button>
                                    </div>
                                    <div class="col-xs-12">
                                        <button type="submit" class="btn-info btn-detail-topic">Xem chi tiết</button>
                                    </div>                
                                </div>                                 
                            </div>
                        </div>

                        <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">                                   
                            <div class="panel panel-primary text-center">                                                                           
                                <div class="panel-body panel-topic" style="padding:10px;">
                                    <img src="assets//images/MagicSoundBox.jpg" alt="" class="topic-img">      
                                    <div class="topic-title">
                                        Chủ đề <b>Gia đình</b>
                                    </div>                  
                                    <div class="col-xs-6">
                                        <button type="submit" class="btn-warning btn-update-topic">Sửa</button>
                                    </div> 
                                    <div class="col-xs-6">
                                        <button type="submit" class="btn-danger btn-delete-topic">Xóa</button>
                                    </div>
                                    <div class="col-xs-12">
                                        <button type="submit" class="btn-info btn-detail-topic">Xem chi tiết</button>
                                    </div>                
                                </div>                                 
                            </div>
                        </div>

                        <div class="row">
                            <button type="submit" class="btn-primary btn-read-more">Xem thêm</button>
                        </div>

                    </div>
                </div>
            </div>
            {{-- End of topic list --}}

            {{-- Begin of info panel --}}
            <div class="hidden-xs hidden-sm col-md-3 col-lg-3 result-frame">
                <div class="panel panel-primary text-center panel-total-question">
                    <div class="panel-heading">
                        <h4 class="panel-title">Tổng số chủ đề</h4>
                    </div>
                    <div class="panel-body">
                        <h3 class=""><b>25</b></h3>
                        <p class="text-muted"><b>25</b> chủ đề với <b>2500</b> từ vựng</p>
                    </div>
                </div>

                <div class="panel panel-primary text-center panel-total-question">
                    <div class="panel-heading">
                        <h4 class="panel-title">Số từ / chủ đề</h4>
                    </div>
                    <div class="panel-body">
                        <h3 class=""><b>10</b></h3>
                        <p class="text-muted">Trung bình <b>10 từ vựng</b> trên một chủ đề</p>
                    </div>
                </div>
            </div>
            {{-- End of info panel --}}

        </div>
    </div></div> <!-- container -->

</div> <!-- content -->
@endsection