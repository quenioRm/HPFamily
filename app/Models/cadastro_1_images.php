<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cadastro_1_images extends Model
{
    protected $table = "cadastro_1_images";
	protected $fillable = ["cadastro_id", "name", "path"];

    public function cadastro_1_images(){
        return $this->belongsTo('App\Models\cadastro_1', 'cadastro_id');
    }
}
