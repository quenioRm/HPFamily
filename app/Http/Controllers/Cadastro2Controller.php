<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cadastro_1;
use App\Models\cadastro_2;

class Cadastro2Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('AuthAccount');
    }

    public function Cadastro_2Index()
    {
        return view('cadastro_2.index');
    }

    public function Cadastro_2RegNew()
    {
        return view('cadastro_2.new')->with(['items' => cadastro_1::get()]);
    }


    public function Cadastro2GetGeneralJson()
    {
        return response()->json(['data' => cadastro_2::with('cadastro_1')->get()]);
    }

    public function Cadastro_2RegNewPost(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'cadastro_id' => 'required',
            'parent1' => '',
            'part_parent1' => '',
            'parent2' => '',
            'part_parent2' => '',
            'parent3' => '',
            'part_parent3' => '',
            'parent4' => '',
            'part_parent4' => '',
            'parent5' => '',
            'part_parent5' => ''
        ], [], [
            'cadastro_id' => 'nome',
            'parent1' => 'Parentesco [1]',
            'part_parent1' => 'Grau Parentesco [1]',
            'parent2' => 'Parentesco [2]',
            'part_parent2' => 'Grau Parentesco [2]',
            'parent3' => 'Parentesco [3]',
            'part_parent3' => 'Grau Parentesco [3]',
            'parent4' => 'Parentesco [4]',
            'part_parent4' => 'Grau Parentesco [4]',
            'parent5' => 'Parentesco [5]',
            'part_parent5' => 'Grau Parentesco [5]'
        ]);

        if(!$validator->passes())
            return redirect(route('cad2RegNew'))->withInput()->withErrors($validator->errors());

        $save = cadastro_2::MakeNew($request->all());

        return redirect()->route('cad2Index');
    }

    public function Cadastro_2RegEdit($id)
    {
        $data = cadastro_2::where('id',$id)->first();

        return view('cadastro_2.edit')->with(
            [
                'data' => $data,
                'items' => cadastro_1::get()
            ]
        );
    }

    public function Cadastro_2RegEditPost(Request $request, $id)
    {
        $validator = \Validator::make($request->all(), [
            'cadastro_id' => 'required',
            'parent1' => '',
            'part_parent1' => '',
            'parent2' => '',
            'part_parent2' => '',
            'parent3' => '',
            'part_parent3' => '',
            'parent4' => '',
            'part_parent4' => '',
            'parent5' => '',
            'part_parent5' => ''
        ], [], [
            'cadastro_id' => 'nome',
            'parent1' => 'Parentesco [1]',
            'part_parent1' => 'Grau Parentesco [1]',
            'parent2' => 'Parentesco [2]',
            'part_parent2' => 'Grau Parentesco [2]',
            'parent3' => 'Parentesco [3]',
            'part_parent3' => 'Grau Parentesco [3]',
            'parent4' => 'Parentesco [4]',
            'part_parent4' => 'Grau Parentesco [4]',
            'parent5' => 'Parentesco [5]',
            'part_parent5' => 'Grau Parentesco [5]'
        ]);

        if(!$validator->passes())
            return redirect(route('cad2RegEdit'))->withInput()->withErrors($validator->errors());

        $save = cadastro_2::MakeEdit($request->all(), $id);

        return redirect()->route('cad2Index');
    }

    public function Cadastro_2RegDeleteGet($id)
    {
        $data = cadastro_2::where('id', $id)->first();
        $data->delete();

        return redirect()->route('cad2Index');
    }
}
