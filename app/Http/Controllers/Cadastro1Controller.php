<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cadastro_1;

class Cadastro1Controller extends Controller
{
    public function Cadastro_1Index()
    {
        return view('cadastro_1.index');
    }

    public function Cadastro_1RegNew()
    {
        return view('cadastro_1.new');
    }

    public function Cadastro_1RegNewPost(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'name' => 'required',
            'status_payment' => 'required',
            'observations' => 'required',
            'fantasy' => 'required',
            'file' => 'mimes:jpg,jpeg,png,bmp|max:20000',
        ], [], [
            'name' => 'Nome',
            'status_payment' => 'Status de pagamento',
            'observations' => 'Observações',
            'fantasy' => 'Fantasia',
            'file' => 'Arquivo',
        ]);

        if(!$validator->passes())
            return redirect(route('cad1RegNew'))->withInput()->withErrors($validator->errors());

        $save = cadastro_1::MakeNew($request->all());

        return redirect()->route('cad1RegNew');
    }
}
