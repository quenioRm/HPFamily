<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cadastro_1;
use App\Models\cadastro_1_images;
use Illuminate\Support\Facades\Storage;

class Cadastro1Controller extends Controller
{

    public function __construct()
    {
        $this->middleware('AuthAccount');
    }

    public function Cadastro_1Index()
    {
        return view('cadastro_1.index');
    }

    public function Cadastro1GetJson()
    {
        $items = cadastro_1::get();
        $list[] = [];

        foreach ($items as $key => $item) {

            switch ($item->status_payment) {
                case 0:
                    $item->status_payment_text = 'Pago';
                    break;
                case 1:
                    $item->status_payment_text = 'Não Pago';
                    break;
                case 2:
                    $item->status_payment_text = 'Pago 1/3';
                    break;
                case 3:
                    $item->status_payment_text = 'Pago 2/3';
                    break;
                case 4:
                    $item->status_payment_text = 'Pago 3/3';
                    break;
                case 5:
                    $item->status_payment_text = 'Pago 1/2';
                    break;
                case 6:
                    $item->status_payment_text = 'Pago 2/2';
                    break;
            }

            $list[$key] = $item;
        }

        return response()->json(['data' => $list]);
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
            'files.*' => 'mimes:pdf|max:20000',
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

        return redirect()->route('cad1Index');
    }

    public function Cadastro_1RegEdit($id)
    {
        $data = cadastro_1::where('id',$id)->with('cadastro_1_images')->first();

        return view('cadastro_1.edit')->with(
            [
                'data' => $data
            ]
        );
    }

    public function Cadastro_1RegEditPost(Request $request, $id)
    {
        $validator = \Validator::make($request->all(), [
            'name' => 'required',
            'status_payment' => 'required',
            'observations' => 'required',
            'fantasy' => 'required',
            'files.*' => 'mimes:pdf|max:20000',
        ], [], [
            'name' => 'Nome',
            'status_payment' => 'Status de pagamento',
            'observations' => 'Observações',
            'fantasy' => 'Fantasia',
            'file' => 'Arquivo',
        ]);


        if(!$validator->passes())
            return redirect(route('cad1RegEdit'))->withInput()->withErrors($validator->errors());

        $save = cadastro_1::MakeEdit($request->all(), $id);

        return redirect()->route('cad1Index');
    }

    public function Cadastro_1RegDeleteFileGet($id)
    {
        $file = cadastro_1_images::where('id', $id)->first();

        if($file){
            $file->delete();
            Storage::disk('public')->delete($file->path);
        }
        return redirect()->route('cad1RegEdit', $file->cadastro_id);
    }

    public function Cadastro_1RegDeleteGet($id)
    {
        $files = cadastro_1_images::where('cadastro_id', $id)->get();
        if($files){
            foreach ($files as $file) {
                Storage::disk('public')->delete($file->path);
            }
        }

        $data = cadastro_1::where('id', $id)->first();
        $data->delete();

        return redirect()->route('cad1Index');
    }

    public function Cadastro_1IndexGeneral()
    {
        return view('main.index');
    }

    public function Cadastro1GetGeneralJson()
    {
        return response()->json(['data' => cadastro_1::with('cadastro_1_images')->get()]);
    }

    public function Cadastro_1IndexGeneralView($id)
    {
        $data = cadastro_1::where('id',$id)->with('cadastro_1_images')->with('cadastro_2')->first();

        return view('main.resume')->with(
            [
                'data' => $data
            ]
        );
    }
}
