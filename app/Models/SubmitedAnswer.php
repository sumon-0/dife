<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubmitedAnswer extends Model
{
    use HasFactory;
    protected $table = 'tbl_submited_answers';
    protected $fillable = array('fk_company_id', 'question_no', 'selected_answer');
}
