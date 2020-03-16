<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $table = 'empresas';
    protected $fillable= ['title'];

    protected $hidden = [
        'created_at', 'uptated_at'
    ];


    public function empleados()
    {
	return $this->belongsTo('App\models\Empleado', 'empleado_id');
    }



}
