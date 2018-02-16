<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use app\QuestionOptions;

class Questionlist extends Model
{
    protected $table = 'questionlist';
    
    public function QuestionOptions ()
    {
        return $this->hasMany('App\QuestionOptions', 'questionListId', 'id')
        ->orderBy('id', 'asc');
    }
    
}
