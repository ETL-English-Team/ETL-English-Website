<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Topic extends Model
{
    protected $table = 'topic';
    protected $primaryKey = 'topic_id';
    public $timestamps = false;

    public static function getAllTopicUnlocked($level){
        $data = DB::table('topic')
                ->where('topic.level','<=',$level)
                ->get();

        return $data;
    }

    public static function getTopicForCurrentlyLevel($level){
        $data = DB::table('topic')
                ->where('topic.level','=',$level)
                ->first();

        return $data;
    }

    public static function getTopicById($topic_id){
        $data = DB::table('topic')
                ->where('topic.topic_id','=',$topic_id)
                ->first();

        return $data;
    }
}
