<?php

namespace App\Http\Controllers;
use App\Models\modalidades;
use App\Models\Alunos;

use Illuminate\Http\Request;

class ModalidadesController extends Controller
{

    public function index()
    {
        $alunos = Alunos::get();
        $modalidades = modalidades::get();  
      return view('paginas.conteudo.modalidades.index', compact('alunos', 'modalidades'));
    
    }

    public function create()
    {
        
    }
    public function store(Request $request)
    {
        $modalidades = modalidades::create($request->all());
        $modalidades->save();
        return back()->with('success', 'Modalidade criado com sucesso!');

       

    }

     public function update(Request $request, modalidades $modalidade)
    {
        $modalidade->update($request->all());
        $modalidade->update();
        return back()->with('success', 'Modalidade atualizado com sucesso!');

       
    }

}
