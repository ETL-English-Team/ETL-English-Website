<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class ExaminationQuestion extends Model
{
    protected $table = 'examination_question';
    protected $primaryKey = 'examination_question_id';
    public $timestamps = true;

    public static function getExamQuestionByExamPartId($examination_part_id){
        $data = DB::table('examination_question')
                ->where('examination_part','=',$examination_part_id)
                ->get();

        return $data;
    }
}
