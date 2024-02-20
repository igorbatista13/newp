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
                    <input type="text" id="termo" class="form-control"
                        placeholder="Digite o termo de busca">
                    <div id="resultado"></div>
                </div>
                
                <div class="col-auto">
                    <div class="avatar avatar-xl position-relative">
                        <img src="https://pngimg.com/uploads/shopping_cart/shopping_cart_PNG54.png"
                            alt="profile_image" class="w-100 border-radius-lg shadow-sm">
                    </div>
                </div>
                <div id="carrinho" class="col-lg-5">
                    <h2>Carrinho</h2>
                    
                    <ul id="lista-carrinho" class="list-group"></ul>
                </div>
                
                <div class="col-lg-2 my-auto">
                    <div class="avatar avatar-xl position-relative">
                        <img src="https://pngimg.com/uploads/shopping_cart/shopping_cart_PNG54.png"
                            alt="profile_image" class="w-100 border-radius-lg shadow-sm">
                    </div>
                    <div id="total"> Total: R$ </div>
                    <button id="finalizarCompra" class="btn btn-primary mt-3">Finalizar Compra</button>
                </div>
                
            </div>

            <div class="col-md-5 mt-4">
            <div class="card-body pt-2 p-3">
                <ul class="list-group">
                  <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                    <div class="d-flex flex-column">
                      <h6 class="mb-3 text-sm">Oliver Liam</h6>
                      <span class="mb-2 text-xs">Company Name: <span class="text-dark font-weight-bold ms-sm-2">Viking Burrito</span></span>
                      <span class="mb-2 text-xs">Email Address: <span class="text-dark ms-sm-2 font-weight-bold">oliver@burrito.com</span></span>
                      <span class="text-xs">VAT Number: <span class="text-dark ms-sm-2 font-weight-bold">FRB1235476</span></span>
                    </div>
                    <div class="ms-auto text-end">
                        <button class="btn btn-primary btn-sm adicionar" data-id="' +
                            produto.id + '" data-nome_produto="' + produto.Nome_Produto +
                            '" data-preco_venda="' + produto.Preco_Venda +
                            '" data-image= "' + produto.image + '" data-Codigo_barra= "' +
                            produto
                            .Codigo_barra + '">Adicionar</button>';
                      <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="far fa-trash-alt me-2"></i>Delete</a>
                    </div>
                  </li>
                </ul></div> </div>








    @include('paginas.base.rodape.rodape')
