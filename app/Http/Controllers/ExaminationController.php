<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Examination;
use Session;

class ExaminationController extends Controller
{
    public function showFirstExamView($level){
        $begin_time = getdate();
        $user_id = 1;
        $exam = new Examination;
        // $exam->began_at = $begin_time;
        $exam->level = $level;
        $exam->user_id = $user_id;
        $exam->save();
        $exam_id_inserted = $exam->examination_id;
        // Session::put('exam_begin_time',$begin_time);

        return view('user.first-examination',['exam_id_inserted'=>$exam_id_inserted]);
    }

    public function showSecondExamView($id){
        $vocabulary_list = WordEn::getAllVocabularyOnceTopic($id);
        $topic = Topic::getTopicById($id);
        return view('user.first-examination',['vocabulary_list'=>$vocabulary_list,
                                                'topic'=>$topic]);
    }
}
