<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\cadastro_1_images;

class cadastro_1 extends Model
{
	protected $table = "cadastro_1";
	protected $fillable = ["name", "status_payment", "observations", "fantasy"];

    public function cadastro_1_images(){
        return $this->hasMany('App\Models\cadastro_1_images', 'cadastro_id');
    }

    public static function MakeNew($inputs)
    {
        $cad = new cadastro_1();
        $cad->name = $inputs['name'];
        $cad->status_payment = $inputs['status_payment'];
        $cad->observations = $inputs['observations'];
        $cad->fantasy = $inputs['fantasy'];
        $cad->save();


        for ($i=0; $i < count($inputs['files']); $i++) {
            $file = $inputs['files'][$i];

            $image = new cadastro_1_images();
            $image->cadastro_id = $cad->id;
            $image->name = $file->getClientOriginalName();
            $image->path = $file->store('public/cadastro1/' . $cad->id);
            $image->path = str_replace("public/", "", $image->path);
            $image->save();
            unset($image);
        }
    }

    public static function MakeEdit($inputs, $id)
    {
        $cad = cadastro_1::find($id);
        $cad->name = $inputs['name'];
        $cad->status_payment = $inputs['status_payment'];
        $cad->observations = $inputs['observations'];
        $cad->fantasy = $inputs['fantasy'];
        $cad->save();

        if(isset($inputs['files'])){
            for ($i=0; $i < count($inputs['files']); $i++) {
                $file = $inputs['files'][$i];
    
                $image = new cadastro_1_images();
                $image->cadastro_id = $cad->id;
                $image->name = $file->getClientOriginalName();
                $image->path = $file->store('public/cadastro1/' . $cad->id);
                $image->path = str_replace("public/", "", $image->path);
                $image->save();
                unset($image);
            }
        }
    }
}
