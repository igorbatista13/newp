@include('paginas.base.topo.topo')
@include('paginas.mensagens.mensagem')
@include('paginas.conteudo.planos.menu_planos')

<div class="container-fluid py-0">

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="table-responsive">
                <table class="table table-flush" id="datatable-search">
                    <thead class="thead-light">
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Preço</th>
                            <th>Status</th>
                            <th>Vigencia</th>
                            <th>Beneficos</th>
                            <th>Obs</th>
                            <th> </th>
                        </tr>
                    </thead>
                    @foreach ($plano as $planos)
                    <tbody>
                        <tr>
                            <td class="text-xs font-weight-bold">
                                <div class="d-flex align-items-center">                                
                                    <p class="text-xs font-weight-bold ms-2 mb-0">{{ $planos->id }}</p>
                                </div>
                            </td>
                            <td class="text-xs font-weight-bold">
                                <div class="d-flex align-items-center">
                               
                                    <span>{{ $planos->Nome_Plano }}</span>
                                </div>
                            </td>
                  
                            <td class="text-xs font-weight-bold">

                                <div class="d-flex align-items-center">
                                    <button
                                        class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-2 btn-sm d-flex align-items-center justify-content-center"><i
                                            class="fas fa-check" aria-hidden="true"></i></button>
                                    <span>{{ $planos->Preco }}</span>
                                </div>

                            </td>
                            <td class="text-xs font-weight-bold">
                                <span class="my-2 text-xs">{{ $planos->Status }}</span>
                            </td>
                            <td class="text-xs font-weight-bold">
                                <span class="my-2 text-xs">{{ $planos->Vigencia }}</span>
                            </td>
                            <td class="text-xs font-weight-bold">
                                <span class="my-2 text-xs">{{ $planos->Beneficos }}</span>
                            </td>
                            <td class="text-xs font-weight-bold">
                                <span class="my-2 text-xs">{{ $planos->Obs }}</span>
                            </td>

                            <td>
                                EDITAR
                            </td>
                    
                        </tr>
                        
                       
                    </tbody>
                    @endforeach

                </table>
            </div>
        </div>
    </div>
</div>
</div>

@include('paginas.base.rodape.rodape')
