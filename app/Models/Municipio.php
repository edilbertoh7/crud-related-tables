<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    use HasFactory;
    static $rules = [
		'name' => 'required',
		'depa_id' => 'required',
    ];

   // protected $perPage = 20;

    protected $fillable = ['name','depa_id'];

    public function departamento()
    {
        return $this->hasOne('App\Models\departamento', 'id', 'depa_id');
    }
}
