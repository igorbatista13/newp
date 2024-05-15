<?php
    
namespace App\Http\Controllers;
    
use App\Models\MinhaEmpresa;
use Illuminate\Http\Request;
    
class MinhaEmpresaController extends Controller
{ 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:minhaempresa-list|minhaempresa-create|minhaempresa-edit|minhaempresa-delete', ['only' => ['index','show']]);
         $this->middleware('permission:minhaempresa-create', ['only' => ['create','store']]);
         $this->middleware('permission:minhaempresa-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:minhaempresa-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $titulo = 'Minha Empresa';

        $empresa = Minhaempresa::where('id', '>=', 0)->exists();

     //   $saldo_existe = Saldo::where('empresa_cliente_id', $cliente->id)->exists();

      // dd($empresa);
        $minhaempresa = MinhaEmpresa::get();
        return view('paginas.conteudo.minhaempresa.index',compact('minhaempresa','empresa', 'titulo'));
        
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $titulo = 'Minha Empresa';

        return view('paginas.conteudo.minhaempresa.create',compact('titulo'));
    }


    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
  
    
        MinhaEmpresa::create($request->all());
    
        return redirect()->route('paginas.conteudo.minhaempresa.index')
                        ->with('success','Minha Empresa criada com sucesso!');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(MinhaEmpresa $minhaempresa)
    {
        return view('paginas.conteudo.minhaempresa.show',compact('minhaempresa'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(MinhaEmpresa $minhaempresa)
    {
        $titulo = 'Minha Empresa';

        return view('paginas.conteudo.minhaempresa.edit',compact('minhaempresa', 'titulo'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MinhaEmpresa $minhaempresa)
    {

        $minhaempresa->update($request->all());

        return redirect()->route('minhaempresa.index');

    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    // public function destroy(MinhaEmpresa $minhaempresa)
    // {
    //     $minhaempresa->delete();
    
    //     return redirect()->route('minhaempresa.index')
    //                     ->with('success','Minha Empresa foi deletada com sucesso!');
    // }
}