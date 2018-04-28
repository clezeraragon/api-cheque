<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;


class UserSaldo extends Model
{

    protected $table = 'chequeteatro_usuario_saldo';

    protected  $fillable = ['codigo_ativacao_id','user_id','user_email','saldo','dt_expiracao','criado'];

    public $timestamps = false;


    public static function insertSaldo($array)
    {
        $con = new UserSaldo;
        $con->codigo_ativacao_id = $array['codigo_ativacao_id'];
        $con->user_id = $array['user_id'];
        $con->user_email = $array['user_email'];
        $con->saldo = $array['saldo'];
        $con->dt_expiracao = $array['dt_expiracao'];
        $con->criado = $array['criado'];

       return $con->create();
    }

}
