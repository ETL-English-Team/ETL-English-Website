@extends('user.master-layout')
@section('content')
<link href="assets/css/examination.css" rel="stylesheet" type="text/css">
    <!-- Start content -->
<div class="content">
        <div class="container"><div class="list-items-box">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-header-title">
                        <h4 class="pull-left page-title">Phần 1 - Điền từ theo nghĩa</h4>
                        <ol class="hidden-xs breadcrumb pull-right">
                            <button type="submit" class="btn-link">Hủy bài kiểm tra</button>
                        </ol>
                        <div class="clearfix"></div>

                        {{-- button bắt đầu kiểm tra --}}
                        <div class="row hidden-sm hidden-md hidden-lg">
                            <div class="col-xs-3"></div>
                            <button type="submit" class="btn-success col-xs-6 btn-begin-test">Hủy bài kiểm tra</button>
                            <div class="col-xs-3"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 hidden-sm hidden-md hidden-lg">
                    <div class="panel panel-primary text-center panel-total-question">
                        <div class="panel-heading">
                            <h4 class="panel-title">Kết quả của bạn</h4>
                        </div>
                        <div class="panel-body">
                            <h3 class=""><b>2 - 1 / 10</b></h3>
                            <p class="text-muted">Đúng <b>2</b> - Sai <b>1</b> trên tổng <b>10 câu</b></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">

                {{-- Begin of examination box --}}
                <div class="col-xs-12 col-sm-6 col-md-8 col-lg-8 examination-question">
                    <div class="panel panel-primary text-center vocabulary-box">
                        <div class="panel-heading">
                            <h4 class="panel-title">Câu 1</h4>
                        </div>
                        <div class="panel-body">
                            <img src="assets/images/MagicSoundBox.jpg" class="question-img" alt="">
                            <div class="question-content">
                                <b>Nghĩa của từ</b>: (n) gia đình <br><br>
                                <div class="row">
                                    <input type="text" class="form-control" required placeholder="Câu trả lời" value="{{$exam_id_inserted}}">
                                    <button type="submit" class="btn-success btn-send-answer">Gửi câu trả lời</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- End of examination box --}}

                {{-- Begin of result frame --}}
                <div class="hidden-xs col-sm-6 col-md-4 col-lg-4 result-frame">
                    <div class="panel panel-primary text-center panel-total-question">
                        <div class="panel-heading">
                            <h4 class="panel-title">Tổng số câu</h4>
                        </div>
                        <div class="panel-body">
                            <h3 class=""><b>10</b></h3>
                            <p class="text-muted">Tổng số câu hỏi trong phần này: <b>10 câu</b></p>
                        </div>
                    </div>

                    <div class="panel panel-primary text-center panel-total-question">
                        <div class="panel-heading">
                            <h4 class="panel-title">Số câu trả lời đúng - sai</h4>
                        </div>
                        <div class="panel-body">
                            <h3 class=""><b>2 - 1</b></h3>
                            <p class="text-muted">Bạn đã trả lời <b>đúng 2 câu</b> và <b>sai 1 câu</b></p>
                        </div>
                    </div>
                </div>
                {{-- End of result frame --}}

            </div>
        </div></div> <!-- container -->

    </div> <!-- content -->
@endsection