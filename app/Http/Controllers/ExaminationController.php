<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Examination;
use App\ExaminationCategory;
use App\ExaminationPart;
use App\ExaminationQuestion;
use App\WordEn;
use Session;

class ExaminationController extends Controller
{
    //Hàm chạy khi truy cập route first-examination
    protected function showFirstExamView($level){
        $user_id = 1;
        $first_exam = ExaminationCategory::getExamCategoryById(1);

        $exam = new Examination;
        $exam->level = $level;
        $exam->user_id = $user_id;
        $exam->save();
        $exam_id_inserted = $exam->examination_id;
        Session::put('exam_id',$exam_id_inserted);

        $this->insertExaminationPart('exam_id',1,'exam_part_id_1');
        $voca_random_list = WordEn::getAllVocaRandomByLevel($level);

        $question_number = 1;
        foreach($voca_random_list as $voca){
            $word_id = $voca->word_id;
            $this->insertExaminationQuestion('exam_part_id_1', $question_number, $word_id);
            $question_number++;
        }

        $exam_part1_id = session()->get('exam_part_id_1');
        $first_question = ExaminationQuestion::getQuestionForFirstExam($exam_part1_id,1);
        $num_of_question = ExaminationQuestion::getNumOfQuestionForFirstExam($exam_part1_id);

        return view('user.first-examination',['first_exam'=>$first_exam,
                                            'first_question'=>$first_question,
                                            'num_of_question'=>$num_of_question]);
    }

    //Hàm chạy khi truy cập route second-examination
    protected function showSecondExamView($level){
        $second_exam = ExaminationCategory::getExamCategoryById(2);
        insertExaminationPart(2,'exam_part_id_2');

        return view('user.second-examination',['second_exam'=>$second_exam]);
    }

    //Hàm insert vào examination part
    protected function insertExaminationPart($exam_id ,$examination_category_id, $exam_part_id_session){
        $examination_id = session()->get($exam_id);
        $exam_part = new ExaminationPart;
        $exam_part->examination_id = $examination_id;
        $exam_part->examination_category_id = $examination_category_id;
        $exam_part->point = 0;
        $exam_part->save();
        $exam_part_id_inserted = $exam_part->examination_part_id;
        Session::put($exam_part_id_session ,$exam_part_id_inserted);
    }

    //Hàm insert vào examination question
    protected function insertExaminationQuestion ($exam_part_id, $question_number, $word_id){
        $exam_part_id = session()->get($exam_part_id);

        $exam_question = new ExaminationQuestion;
        $exam_question->examination_part_id = $exam_part_id;
        $exam_question->question_number = $question_number;
        $exam_question->word_id = $word_id;
        $exam_question->save();
    }
}
