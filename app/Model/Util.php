<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Util extends Model
{

    public static function gerarCodigo()
    {
        $caracters = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $codigo = substr(str_shuffle(str_repeat($caracters, 6)), 0, 6);
        return $codigo;
    }
    public static function gerarData()
    {
        return $dt_validade = date('Y-m-d', strtotime("+15 days", strtotime(date('Y-m-d'))));
    }
    public static function debitarSaldo($param)
    {
        return $total = $param - 1;
    }

    public static function dateFormat($date)
    {
        $date = date_create($date);
        return date_format($date, "d/m/Y");
    }

}
