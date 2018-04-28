<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;


class User extends Model 
{
  

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'chequeteatro_users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['saldo', 'user_email', 'user_id'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */

    public static function getUser($id)
    {
        return User::find($id);
    }
//    protected $hidden = ['user_pass', 'remember_token'];
}
