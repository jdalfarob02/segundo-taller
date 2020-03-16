<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table = 'empleados';
    protected $fillable= ['name', 'email', 'password','empleado_id'];

    protected $hidden = [
        'created_at', 'uptated_at'
    ];

   

    public function empresas()
{
    return $this->hasMany('App\models\Empresa');
}

}
