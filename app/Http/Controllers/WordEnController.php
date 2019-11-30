<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WordEn;
use App\Topic;

class WordEnController extends Controller
{
    public function showView($id){
        $vocabulary_list = WordEn::getAllVocabularyOnceTopic($id);
        $topic = Topic::getTopicById($id);
        return view('user.vocabulary',['vocabulary_list'=>$vocabulary_list,
                                        'topic'=>$topic]);
    }
}
