<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Usuario extends Model {

    use SoftDeletes;

    public $timestamps = false;
    protected $table = 'usuario';
    protected $fillable = [
        'id_usuario',
        'nome',
        'email',
        'senha',
        'endereco',
        'sexo',
        'data_nascimento',
        'status'];

    protected $primaryKey = "id_usuario";

}

