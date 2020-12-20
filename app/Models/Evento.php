<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Evento extends Model {

    use SoftDeletes;

    public $timestamps = false;
    protected $table = 'evento';
    protected $fillable = [
        'id_evento',
        'nome',
        'local',
        'data_evento',
        'horario',
        'descricao',
        'status'];


    protected $primaryKey = "id_evento";

}

