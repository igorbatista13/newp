<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunosController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:produto-list|produto-create|produto-edit|produto-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:produto-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:produto-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:produto-delete', ['only' => ['destroy']]);
    }


    public function index()
    {
        return view('paginas.conteudo.alunos.index');
    }

    public function create()
    {
    }

    public function edit()
    {
    }

    public function update()
    {

    }
}
