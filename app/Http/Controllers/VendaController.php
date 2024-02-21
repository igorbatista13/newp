<?php

namespace App\Http\Controllers;
use App\Models\Venda;
use App\Models\Produto;

use Illuminate\Http\Request;

class VendaController extends Controller
{
    public function index()
    {

        $titulo = 'Recibos';
        $produto  = Produto::count();
        $venda = Venda::get();


        return view('paginas.conteudo.vendas.vendas', compact(
            'produto',
            'titulo',
            'venda'
        ));
    }
    public function finalizarCompra(Request $request)
    {
        // Valide a entrada conforme necessário
        $data = $request->json()->all();
        dd($data);
        // Recupere os dados do pedido do formulário de pagamento
        $formaPagamento = $request->input('Forma_Pagamento');
        $nomeCliente = $request->input('Nome_Cliente');
        $observacoes = $request->input('Observacoes');
   //     $produtos = $data['produtos']; // Se os produtos forem enviados como um array



        //  foreach ($data as $produto) {
        //     // $produtoId = $produto['id'];
        //      $preco = $produto['preco'];
        //      $quantidade = $produto['quantidade'];
        
        // //     // Agora você pode salvar esses valores no banco de dados conforme necessário
        //  }
        // // Crie a venda
        $venda = Venda::create([
            'Forma_Pagamento' => $formaPagamento,
            'Nome_Cliente' => $nomeCliente,
            'Observacoes' => $observacoes,
        ]);

    //    $venda->produtos()->attach($produtos, ['preco' => $preco, 'quantidade' => $quantidade]);
       // $venda->produto()->attach($produtos[$product], ['Quantidade' => $quantities[$product]]);

 
        $venda->save();
    
        // Retorne uma resposta de sucesso
        return response()->json(['message' => 'Venda criada com sucesso', 'venda' => $venda], 201);
    }

    public function xfinalizarCompra(Request $request)
    {
        // Validar os dados do formulário, se necessário

        // Criar uma nova venda
      // Criar uma nova venda
      $venda = new Venda();
      $venda->Nome_Cliente = $request->input('nome_cliente');
      $venda->Forma_Pagamento = $request->input('forma_pagamento');
      $venda->DataRetirada = $request->input('data_retirada');
      // Adicione os outros campos conforme necessário
      $venda->total = $request->input('total');
      $venda->save();

      // Adicionar produtos à venda
      $produtos = $request->input('produtos');
      foreach ($produtos as $produto) {
          $venda_pivot = new Venda_pivot();
          $venda_pivot->Quantidade = $produto['quantidade'];
          $venda_pivot->vendas_id = $venda->id;
          $venda_pivot->produto_id = $produto['id'];
          $venda_pivot->save();
      }


        // Retornar uma resposta de sucesso (pode redirecionar ou retornar JSON, conforme necessário)
        return response()->json(['success' => true]);
    }
}
