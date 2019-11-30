<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class WordEn extends Model
{
    protected $table = 'word_en';
    protected $primaryKey = 'word_id';
    public $timestamps = false;

    public static function getAllVocabularyOnceTopic($topic_id){
        $data = DB::table('word_en')
                ->join('topic','topic.topic_id','=','word_en.topic_id')
                ->where('word_en.topic_id','=',$topic_id)
                ->select('word_en.word_id',
                        'word',
                        'topic_name_vi',
                        'spelling',
                        'voice',
                        'word_en.image',
                        'example_sentence',
                        'meaning_1',
                        'meaning_2',
                        'meaning_3')
                ->get();

        return $data;
    }

    public static function getAllVocaRandomByLevel($level){
        $data = DB::table('word_en')
                ->join('topic','topic.topic_id','=','word_en.topic_id')
                ->where('topic.level','=',$level)
                ->select('word_en.word_id')
                ->inRandomOrder()
                ->get();

        return $data;
    }
}
