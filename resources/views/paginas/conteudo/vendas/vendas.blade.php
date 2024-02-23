@include('paginas.base.topo.topo')

{{--      --}}

<div class="card shadow-lg mx-3 card-profile ">
    <div class="card-body p-3">
        <div class="row gx-4">
            <div class="col-auto">
                <div class="avatar avatar-xl position-relative">
                    <img src="https://yata.s3-object.locaweb.com.br/b1da36362690140b82f2615336181d34f58abf5a5fadf78cb182f5aafb43242e"
                        alt="profile_image" class="w-100 border-radius-lg shadow-sm">
                </div>
            </div>
            <div class="col-lg-3 my-auto">

                <h2>Produtos</h2>
                <div style="display: flex; align-items: center;">
                    <img src="https://i.pinimg.com/736x/8a/a5/96/8aa596d474baee6cf6549cd1c979b29b.jpg" width="100px" style="margin-right: -5px;" />
                    <input type="text" id="termo" class="form-control" placeholder="Digite o termo de busca">
                </div>
                <div id="resultado"></div>
            </div>

            <div class="col-auto">
                <div class="avatar avatar-xl position-relative">
                    <img src="https://logowik.com/content/uploads/images/shopping-cart5929.jpg" alt="profile_image"
                        class="w-100 border-radius-lg shadow-sm">
                </div>
            </div>
            <div id="carrinho" class="col-lg-5">
                <h2>Carrinho</h2>

                <ul id="lista-carrinho" class="list-group"></ul>
            </div>

            <div class="col-lg-2 my-auto">
                <div class="avatar avatar-xl position-relative">
                    <img src="https://pngimg.com/uploads/shopping_cart/shopping_cart_PNG54.png" alt="profile_image"
                        class="w-100 border-radius-lg shadow-sm">
                </div>
                <div id="total"> Total: R$ </div>
                <button id="finalizarCompra" class="btn btn-primary mt-3">Finalizar Venda</button>
            </div>

        </div>



        <!-- Modal de Pagamento -->
        <div class="modal fade" id="modalPagamento" tabindex="-1" aria-labelledby="modalPagamentoLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalPagamentoLabel">Selecionar Forma de Pagamento</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="formPagamento">
                            @csrf
                            <div class="mb-3">
                                <label for="Nome_Cliente" class="form-label">Nome do Cliente</label>
                                <input type="text" class="form-control" id="Nome_Cliente" name="Nome_Cliente">


                            </div>
                            <div class="mb-3">
                                <label for="formaPagamento" class="form-label">Forma de Pagamento</label>
                                <select class="form-select" id="formaPagamento" name="Forma_Pagamento">
                                    <option value="Pix">Pix</option>
                                    <option value="Cartão de Crédito">Cartão de Crédito</option>
                                    <option value="Dinheiro">Dinheiro</option>
                                </select>
                                <div class="mb-3">
                                    <label for="Observacoes" class="form-label">Observação</label>
                                    <input type="text" class="form-control" id="Observacoes" name="Observacoes">
                                </div>
                            </div>
                            <!-- Aqui você pode incluir outros campos necessários, como Taxa, Desconto, Mensagem para Cliente, etc. -->
                            <button type="submit" class="btn btn-primary">Finalizar Pagamento</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <HR> 
        <div class="container">
            <div class="row">
            <div class="card-body">
          <div class="table-responsive">
              <table class="table app-table-hover mb-0 text-left">
                    <thead>
                        
        @foreach ($venda as $key => $vendas)
        <tbody>
            <tr>
             
        <td> <strong>Cliente:</strong> {{ $vendas->Nome_Cliente }}</p> </td>
        <td> <strong>Forma de Pagamento:</strong> {{ $vendas->Forma_Pagamento }}</p> </td>
        <td> <strong>Obs.</strong> {{ $vendas->Observacoes }}</p></td>
        <td>

            <a href="{{asset('/venda/invoice/')}}/{{$vendas->id}}" button type="button" class="btn btn-outline-secondary" >
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer" viewBox="0 0 16 16">
            <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
            <path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4V3zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2H5zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1z"/>
          </svg>
            Ver
            </button> </a>
           </td>
    
        <!-- Outras informações da venda -->
        @endforeach 
     
  
            {{-- <tr>
                @foreach($venda->produto as $item)
                
              </td>
                  <td>{{$item->Nome_Produto}}</td>
                  <td>{{$quantidade = $item->pivot['Quantidade'] }}</td>
                  {{-- <td class="unit">R$ {{$preco= $item['Preco_Produto']}} </td> --}}
                  {{-- <td> {{"R$ " . number_format($preco= $item['Preco_Produto'], 2, ",", ".")  }} </td>
                  
                  <td> {{"R$ " . number_format($total1 = $preco * (int)$quantidade, 2, ",", ".")  }} <?php $total2 += $total1; ?> </td>
           --}}
            {{-- </tr> --}}
            {{-- @endforeach --}} 
        </tbody>
    </table>
        
        {{-- <strong>Total da Venda:</strong> R$ {{ $venda->total }}</p> --}}
        


        @include('paginas.base.rodape.rodape')
