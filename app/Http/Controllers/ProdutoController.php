<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Produto;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ProdutoExport;
use App\Models\Fornecedor;

class ProdutoController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:produto-list|produto-create|produto-edit|produto-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:produto-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:produto-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:produto-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $titulo = 'Produtos';
        $produtoqtd  = Produto::count();

      //  $produto = Produto::get();
        $produto = Produto::with('fornecedor')->get();  
        $fornecedor = Fornecedor::get();
        $search = request('search');

        if ($search) {
            $produto = Produto::where([['Nome_Produto', 'like', '%' . $search . '%']])->get();
        } else {
            $produto = Produto::all();
        }
        return view('paginas.conteudo.produtos.produtos', compact('produto','fornecedor', 'search', 'titulo', 'produtoqtd'));
    }


    public function buscar(Request $request)
    {
        try {
            $termo = $request->input('termo');
    
            $produtos = Produto::where('Nome_Produto', 'LIKE', "%$termo%")
                                ->orWhere('Codigo_barra', $termo)
                                ->get();
    
            return response()->json($produtos);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $titulo = 'Produtos';

        return view('produtos.create', compact('titulo'));
    }


    public function store(Request $request)
    {


        //  $criar_produto =  new Produto;
        $criar_produto =  Produto::create($request->all());

        //$criar_produto = $request->all();
        // $criar_produto->Nome_Produto       = $request->Nome_Produto;
        // $criar_produto->Categoria_Produto  = $request->Categoria_Produto;
        // $criar_produto->Status_Produto     = $request->Status_Produto;
        // $criar_produto->Preco_Produto      = $request->Preco_Produto;
        // $criar_produto->Estoque_Produto    = $request->Estoque_Produto;
        // $criar_produto->Quantidade_Produto = $request->Quantidade_Produto;

        // Imagem do produto upload
        if ($request->hasFile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $request->image->move(public_path('images/produtos'), $imageName);

            $criar_produto->image = $imageName;
        }

        $criar_produto->save();

        $criar_produto = Produto::all();

        toast('Produto criado com sucesso!', 'success');

        return redirect('/produtos')->with('success', 'Produto criado com sucesso!');



    }

  
    public function show(Produto $produto)
    {
        return view('produtos.show', compact('produto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Produto $produto)
    {
        $titulo = 'Produtos';

        return view('produtos.edit', compact('produto', 'titulo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produto $produto)
    {
        $produto->update($request->all());


        // $produto->body = $request->body;

        // $produto->Nome_Produto       = $request->Nome_Produto;
        // $produto->Categoria_Produto  = $request->Categoria_Produto;
        // $produto->Status_Produto     = $request->Status_Produto;
        // $produto->Preco_Produto      = $request->Preco_Produto;
        // $produto->Estoque_Produto    = $request->Estoque_Produto;
        // $produto->Quantidade_Produto = $request->Quantidade_Produto;

        //  $produto = $request->all();


        // Imagem do produto upload
        // Imagem do produto upload
        if ($request->hasFile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $request->image->move(public_path('images/produtos'), $imageName);

            $produto->image = $imageName;
        }

           $produto->update();



        return redirect('/produtos')->with('edit', 'Produto editado com sucesso!');
    }


    public function destroy(Produto $produto)
    {
        $produto->delete();

        return redirect()->route('produtos.index')
            ->with('delete', 'Produto deletado com sucesso!');
    }

    public function export()
    {


        return Excel::download(new ProdutoExport, 'Produtos.xlsx');
        //  return Excel::download(new Empresa_Cliente, 'users.xlsx');
    }
}
