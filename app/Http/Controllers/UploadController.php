<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Response;
use File;
use Session;

class UploadController extends Controller
{
    public function UploadFilesGet()
    {
        return view('main.fileupload');
    }

    public function UploadFilesPost(Request $request)
    {
        if ($request->hasFile('file') && $request->file('file')->isValid()) {

            $extension = $request->file->extension();

	        $upload = Storage::disk('public')->put('', $request->file);

	        if (!$upload)
	            return Response::json(['error' => 'Arquivo não encontrado!'],400);

	        if ( $extension != "pdf"){
	        	return Response::json(['error' => 'File format error, use .pdf!'], 400);
	        }
		}

        return Response::json(['success' => 'Finished!'], 200);
    }

}
