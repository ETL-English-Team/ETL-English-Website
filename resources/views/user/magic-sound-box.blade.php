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
                        <h4 class="pull-left page-title">Trò chơi "Chiếc hộp âm thanh"</h4>
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

                    {{-- Begin of charts --}}
                    <div class="hidden-xs hidden-sm col-md-4 col-lg-4">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h4 class="panel-title">Top 10 tuần 34</h4>
                                </div>
                                <div class="panel-body" style="padding: 0px">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Top</th>
                                                        <th>username</th>
                                                        <th>Điểm</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr style="background-color:#66FFFF">
                                                        <td>1<img class="top-chart-img" src="assets/images/gold-medal.png" alt=""></td>
                                                        <td>nguyenhoangphuc</td>
                                                        <td>30</td>
                                                    </tr>
                                                    <tr style="background-color:#99FFFF">
                                                        <td>2<img class="top-chart-img" src="assets/images/silver-medal.png" alt=""></td>
                                                        <td>nguyenhoangphuc</td>
                                                        <td>26</td>
                                                    </tr>
                                                    <tr style="background-color:#CCFFFF">
                                                        <td>3<img class="top-chart-img" src="assets/images/bronze-medal.png" alt=""></td>
                                                        <td>nguyenhoangphucc</td>
                                                        <td>24</td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>nguyenhoangphucd</td>
                                                        <td>20</td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td>nguyenhoangphuca</td>
                                                        <td>30</td>
                                                    </tr>
                                                    <tr>
                                                        <td>6</td>
                                                        <td>nguyenhoangphucb</td>
                                                        <td>26</td>
                                                    </tr>
                                                    <tr>
                                                        <td>7</td>
                                                        <td>nguyenhoangphucc</td>
                                                        <td>24</td>
                                                    </tr>
                                                    <tr>
                                                        <td>8</td>
                                                        <td>nguyenhoangphucd</td>
                                                        <td>20</td>
                                                    </tr>
                                                    <tr>
                                                        <td>9</td>
                                                        <td>nguyenhoangphucc</td>
                                                        <td>24</td>
                                                    </tr>
                                                    <tr>
                                                        <td>10</td>
                                                        <td>nguyenhoangphucd</td>
                                                        <td>20</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- End of charts --}}


                {{-- Begin of examination box --}}
                <div class="col-xs-12 col-sm-6 col-md-5 col-lg-5 examination-question">
                    <div class="panel panel-primary text-center vocabulary-box">
                        <div class="panel-heading">
                            <h4 class="panel-title">Câu số 1</h4>
                        </div>
                        <div class="panel-body">
                            <img onclick="playAudio()" src="assets/images/MagicSoundBox.jpg" class="question-img" style="cursor:pointer" alt="">
                            <div class="question-content">
                                <b>Ấn vào chiếc hộp</b> để nghe từ khóa ẩn chứa bên trong nào.<br>
                                Hãy cho chúng tôi biết bạn nghe thấy gì bằng cách <b>điền từ đó</b> vào ô bên dưới nhé<br><br>
                                <div class="row">
                                    <input type="text" class="form-control" required placeholder="Câu trả lời">
                                    <button type="submit" class="btn-success btn-send-answer">Gửi câu trả lời</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- End of examination box --}}

                {{-- Begin of result frame --}}
                <div class="hidden-xs col-sm-6 col-md-3 col-lg-3 result-frame">
                    <div class="panel panel-primary text-center panel-total-question">
                        <div class="panel-heading">
                            <h4 class="panel-title">Điểm số hiện tại của bạn</h4>
                        </div>
                        <div class="panel-body">
                            <h3 class=""><b>10</b></h3>
                            <p class="text-muted">Bạn đang đạt <b>10 điểm</b> trong lần thi này</p>
                        </div>
                    </div>

                    <div class="panel panel-primary text-center panel-total-question">
                        <div class="panel-heading">
                            <h4 class="panel-title">Kỉ lục của bạn</h4>
                        </div>
                        <div class="panel-body">
                            <h3 class=""><b>22</b></h3>
                            <p class="text-muted"><b>22 điểm</b> là điểm số cao nhất bạn đạt được trong trò chơi này. Phá vỡ nó nào !</p>
                        </div>
                    </div>
                </div>
                {{-- End of result frame --}}

            </div>
        </div></div> <!-- container -->

    </div> <!-- content -->
@endsection