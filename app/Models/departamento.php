<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class departamento extends Model
{
    //use HasFactory;
    static $rules = [
		'name' => 'required',
		
    ];

    //protected $perPage = 20;
    protected $fillable = ['name'];

    public function municipios()
    {
        return $this->hasMany('App\Models\Municipio', 'depa_id', 'id');
    }
}
