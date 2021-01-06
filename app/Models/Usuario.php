<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Usuario extends Model {

    use SoftDeletes;
    use Notifiable;

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

