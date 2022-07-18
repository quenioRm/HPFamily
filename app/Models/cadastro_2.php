<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cadastro_2 extends Model
{
    protected $table = "cadastro_2";
	protected $fillable = ["cadastro_id", "parent1", "part_parent1", "parent2", "part_parent2",
        "parent3", "part_parent3", "parent4", "part_parent4", "parent5", "part_parent5"
    ];

    public function cadastro_1(){
        return $this->belongsTo('App\Models\cadastro_1', 'cadastro_id');
    }

    public static function MakeNew($inputs)
    {
        $cad = new cadastro_2();
        $cad->cadastro_id = $inputs['cadastro_id'];
        $cad->parent1 = $inputs['parent1'];
        $cad->part_parent1 = $inputs['part_parent1'];
        $cad->parent2 = $inputs['parent2'];
        $cad->part_parent2 = $inputs['part_parent2'];
        $cad->parent3 = $inputs['parent3'];
        $cad->part_parent3 = $inputs['part_parent3'];
        $cad->parent4 = $inputs['parent4'];
        $cad->part_parent4 = $inputs['part_parent4'];
        $cad->parent5 = $inputs['parent5'];
        $cad->part_parent5 = $inputs['part_parent5'];
        $cad->save();
    }

    public static function MakeEdit($inputs, $id)
    {
        $cad = cadastro_2::find($id);
        $cad->cadastro_id = $inputs['cadastro_id'];
        $cad->parent1 = $inputs['parent1'];
        $cad->part_parent1 = $inputs['part_parent1'];
        $cad->parent2 = $inputs['parent2'];
        $cad->part_parent2 = $inputs['part_parent2'];
        $cad->parent3 = $inputs['parent3'];
        $cad->part_parent3 = $inputs['part_parent3'];
        $cad->parent4 = $inputs['parent4'];
        $cad->part_parent4 = $inputs['part_parent4'];
        $cad->parent5 = $inputs['parent5'];
        $cad->part_parent5 = $inputs['part_parent5'];
        $cad->save();
    }
}
