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
            <div class="col-auto my-auto">
                <div class="h-100">
                    <h5 class="mb-1">Localizar Produto</h5>
                    <p class="mb-0 font-weight-bold text-sm">
                        <div class="input-group">
                            <span class="input-group-text text-body">
                                <i class="fas fa-search" aria-hidden="true"></i>
                            </span>
                        </div>
                    </p>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                <div class="nav-wrapper position-relative end-0">
                            <button class="btn btn-icon btn-3 btn-primary" type="button">
                                <span class="btn-inner--icon"><i class="ni ni-box-2"> </i></span>
                                <span class="btn-inner--text">Cadastrar Produto</span>
                            </button>
                    
                </div>
            </div>


            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-4">
                        <h2>Produtos</h2>
                        <input type="text" id="termo" class="form-control mb-3" placeholder="Digite o termo de busca">
                        <div id="resultado" class="mb-3"></div>
                    </div>
                    <div id="carrinho" class="col-md-8 mb-3">
                        <h2>Carrinho</h2>
                        <ul id="lista-carrinho" class="list-group"></ul>
                        <div id="total"></div>
                        <button id="finalizarCompra" class="btn btn-primary mt-3">Finalizar Compra</button>
                    </div>
                </div>
            </div>

            


            @include('paginas.base.rodape.rodape')
