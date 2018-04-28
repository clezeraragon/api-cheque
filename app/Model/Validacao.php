<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Validacao extends Model
{
    protected $table = 'chequeteatro_codigo_validacao';

    protected  $fillable = [
        'usuario_saldo_id',
        'user_id',
        'user_email',
        'beneficiario_nome',
        'beneficio_id',
        'beneficiario_email',
        'cod_validacao',
        'tipo_beneficio',
        'dt_validade',
        'slug'
    ];

    public $timestamps = false;


}
