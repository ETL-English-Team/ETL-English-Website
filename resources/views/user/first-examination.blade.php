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
                <div class="col-xs-8 col-sm-4 col-md-3 col-lg-3">
                    <div class="modal fade" id="modal-result" data-backdrop="static" data-keyboard="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    ETL English thông báo kết quả
                                </div>
                                <div class="modal-body">
                                    Chúc mừng bạn! Bạn đã trả lời đúng. Đáp án câu 1 là <b>determine</b>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn-success btn-next-question">Sang câu tiếp theo</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">

                {{-- Begin of examination box --}}
                <div class="col-xs-12 col-sm-6 col-md-8 col-lg-8 examination-question">
                    <div class="panel panel-primary text-center vocabulary-box">
                        <div class="panel-heading">
                            <h4 class="panel-title">Câu {{$first_question->question_number}}</h4>
                        </div>
                        <div class="panel-body">
                            <img src="{{$first_question->image}}" class="question-img" alt="">
                            <div class="question-content">
                                <b>Nghĩa của từ</b>: {{$first_question->meaning_1}} <br>
                                <i>Hãy điền từ có nghĩa như trên vào ô trả lời bên dưới và ấn vào nút gửi câu hỏi</i><br><br>
                                <div class="row">
                                    <input id="answer" type="text" class="form-control" required placeholder="Câu trả lời">
                                    <button onclick="sendAnswer()" class="btn-success btn-send-answer" data-toggle="modal" data-target="#modal-result">Gửi câu trả lời</button>
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
                            <h3 class=""><b>{{$num_of_question}}</b></h3>
                            <p class="text-muted">Tổng số câu hỏi trong phần này: <b>{{$num_of_question}} câu</b></p>
                        </div>
                    </div>

                    <div class="panel panel-primary text-center panel-total-question">
                        <div class="panel-heading">
                            <h4 class="panel-title num-true-false-title">Số câu trả lời đúng - sai</h4>
                        </div>
                        <div class="panel-body">
                            <h3 class="num-true-false-content"><b>0 - 0</b></h3>
                            <p class="text-muted num-true-false-detail">Bạn đã trả lời <b>đúng 0 câu</b> và <b>sai 0 câu</b></p>
                        </div>
                    </div>
                </div>
                {{-- End of result frame --}}

            </div>

            {{-- begin of result panel mobile --}}
            <div class="row">
                <div class="col-xs-12 hidden-sm hidden-md hidden-lg">
                    <div class="panel panel-primary text-center panel-total-question">
                        <div class="panel-heading">
                            <h4 class="panel-title">Kết quả của bạn</h4>
                        </div>
                        <div class="panel-body">
                            <h3 class=""><b>0 - 0 / {{$num_of_question}}</b></h3>
                            <p class="text-muted">Đúng <b>0</b> - Sai <b>0</b> trên tổng <b>{{$num_of_question}} câu</b></p>
                        </div>
                    </div>
                </div>
            </div>
            {{-- end of result panel mobile --}}

        </div></div> <!-- container -->

    </div> <!-- content -->

    <script src="assets/js/examination.js"></script>
@endsection