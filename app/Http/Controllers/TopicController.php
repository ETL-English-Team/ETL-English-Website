<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Topic;

class TopicController extends Controller
{
    public function showView(){
        $level = 1;
        $unlocked_topic_list = Topic::getAllTopicUnlocked($level);
        $currently_topic = Topic::getTopicForCurrentlyLevel($level);
        return view('user.level-list',['unlocked_topic_list'=>$unlocked_topic_list,
                                        'currently_topic'=>$currently_topic]);
    }
}
