<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Examination extends Model
{
    protected $table = 'examination';
    protected $primaryKey = 'examination_id';
    public $timestamps = false;
}
