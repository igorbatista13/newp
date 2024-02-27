<?php

namespace App\Http\Controllers;
use App\Models\modalidades;

use Illuminate\Http\Request;

class ModalidadesController extends Controller
{

    public function index()
    {
     //   $alunos = Alunos::get();
      //  $modalidades = modalidades::with('modalidades')->get();  
      return back();
    
    }

    public function create()
    {
        
    }
    public function store(Request $request)
    {
        $modalidades = modalidades::create($request->all());
        $modalidades->save();

        return redirect()->route('modalidades.index')
                        ->with('success','Aluno criado com sucesso!');

    }

     public function update(Request $request, Modalidades $modalidades)
    {
        $modalidades->update($request->all());
        $modalidades->update();

        return redirect()->route('paginas.conteudo.alunos.index')
        ->with('edit','Aluno atualizado com sucesso!');
    }

}
