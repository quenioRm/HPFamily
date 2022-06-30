<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function HomeGet()
    {
        return view('main.home');
    }

    public function UploadFilesGet()
    {
        return view('main.fileupload');
    }

    public function Cadastro_1Index()
    {
        return view('cadastro_1.index');
    }

    public function Cadastro_1RegNew()
    {
        return view('cadastro_1.new');
    }
    
}
