<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExaminationCategory extends Model
{
    protected $table = 'examination_category';
    protected $primaryKey = 'examination_category_id';
    public $timestamps = false;
}
