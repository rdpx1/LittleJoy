<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Feedback extends Model {


    public $timestamps = false;
    protected $table = 'feedback';
    protected $fillable = [
        'id_feedback',
        'id_evento',
        'descricao_feedback'
    ];

    protected $primaryKey = "id_feedback";

}

