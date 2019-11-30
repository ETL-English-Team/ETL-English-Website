<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExaminationPart extends Model
{
    protected $table = 'examination_part';
    protected $primaryKey = 'examination_part_id';
    public $timestamps = true;

    public static function getExamPartByExamIdAndExamCateId($examination_id, $examination_category_id){
        $data = DB::table('examination_part')
                ->join('examination','examination.examinationt_id','=','examination_part.examination_id')
                ->join('examination_category','examination_category.examination_category_id','=','examination_part.examination_category_id')
                ->where('examination_part.examination_id','=',$examination_id)
                ->where('examination_part.examination_category_id','=',$examination_category_id)
                ->select('examination_part_id',
                        'examination_part.examination_id',
                        'examination_part.examination_category_id',
                        'examination_part.examination_category_name',
                        'point')
                ->get();

        return $data;
    }
}
