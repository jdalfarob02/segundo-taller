<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profession extends Model
{
    protected $fillable = [
        'title'
    ];
    protected $hidden = [
        'created_at', 'uptated_at'
    ];
    public function professions()
{
    return $this->hasMany('App\Profession');
}

}
