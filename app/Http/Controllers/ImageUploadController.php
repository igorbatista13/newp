<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;




class ImageUploadController extends Controller
{
    public function upload(Request $request)
    {
        $image = $request->input('image');

        // Decodificar a imagem da base64
        list($type, $image) = explode(';', $image);
        list(, $image) = explode(',', $image);
        $image = base64_decode($image);

        // Definir o caminho e nome do arquivo
        $imageName = time() . '.png';
        $path = public_path('images/usuarios' . $imageName);

        // Salvar a imagem no diretório público
        File::put($path, $image);

        return back()->with('success', 'Image uploaded successfully')->with('path', $imageName);
    }

}