@include('paginas.base.topo.topo')
@include('paginas.mensagens.mensagem')


@include('paginas\conteudo\modalidades\menu_modalidades')

<div class="card shadow-lg mx-4 card-profile-bottom">
    <div class="card-body p-2">
        <div class="row gx-4">
            <div class="col-12">
                <div class="card">
                    <div class="table-responsive">
                        <table class="table table-flush" id="datatable-search">
                            <thead class="thead-light">
                                <tr>
                                    <th>Código</th>
                                    <th>Nome da Modalidade</th>
                                    <th>Tipo</th>
                                    <th>Status</th>                            
                                    <th>Obs</th>
                                    <th></th>
                                </tr>
                            </thead>
                            @foreach ($modalidades as $modalidade)
                                <tbody>
                                    <tr>
                                        <td class="text-xs font-weight-bold">
                                            <div class="d-flex align-items-center">
                                                <p class="text-xs font-weight-bold ms-2 mb-0">{{ $modalidade->id }}</p>
                                            </div>
                                        </td>
                                        <td class="text-xs font-weight-bold">
                                            <div class="d-flex align-items-center">
                                                <span
                                                class="badge bg-warning me-0">{{ $modalidade->Nome_Modalidade }}</span>
                                                
                                            </div>
                                        </td>

                                        <td class="text-xs font-weight-bold">

                                            <div class="d-flex align-items-center">


                                                <span class="text-danger ">R$ {{ $modalidade->Tipo }}</span>
                                            </div>

                                        </td>
                                        <td class="text-xs font-weight-bold">
                                            <button
                                                class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-2 btn-sm d-flex align-items-center justify-content-center"><i
                                                    class="fas fa-check" aria-hidden="true"></i></button>
                                            <span class="my-2 text-xs">{{ $modalidade->Status }}</span>
                                        </td>
                                   
                                        <td class="text-xs font-weight-bold">
                                            <span class="my-2 text-xs">{{ $modalidade->Obs }}</span>
                                        </td>

                                        <td>
                                             @include('/paginas/conteudo/modalidades/modal/edit') 
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
</div>

@include('paginas.base.rodape.rodape')