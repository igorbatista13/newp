@include('paginas.base.topo.topo')
@include('paginas.mensagens.mensagem')
@include('paginas.conteudo.professor.menu_professor')

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
                            <th>E-mail</th>
                            <th>CPF</th>
                            <th>RG</th>
                            <th>Sexo</th>
                            <th>Data Nascimento</th>
                            <th>Telefone</th>
                            <th>Profissão</th>
                            <th>Empresa</th>
                            <th>Endereço</th>
                            <th> </th>
                        </tr>
                    </thead>
                    @foreach ($professor as $professor)
                    <tbody>
                        <tr>
                            <td class="text-xs font-weight-bold">
                                <div class="d-flex align-items-center">                                
                                    <p class="text-xs font-weight-bold ms-2 mb-0">{{ $professor->id }}</p>
                                </div>
                            </td>
                            <td class="text-xs font-weight-bold">
                                <div class="d-flex align-items-center">
                               
                                    <span>{{ $professor->Nome_Completo }}</span>
                                </div>
                            </td>
                  
                            <td class="text-xs font-weight-bold">

                                <div class="d-flex align-items-center">
                                    <button
                                        class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-2 btn-sm d-flex align-items-center justify-content-center"><i
                                            class="fas fa-check" aria-hidden="true"></i></button>
                                    <span>{{ $professor->Email }}</span>
                                </div>

                            </td>
                            <td class="text-xs font-weight-bold">
                                <span class="my-2 text-xs">{{ $professor->CPF }}</span>
                            </td>
                            <td class="text-xs font-weight-bold">
                                <span class="my-2 text-xs">{{ $professor->RG }}</span>
                            </td>
                            <td class="text-xs font-weight-bold">
                                <span class="my-2 text-xs">{{ $professor->Sexo }}</span>
                            </td>
                            <td class="text-xs font-weight-bold">
                                <span class="my-2 text-xs">{{ $professor->Data_Nascimento }}</span>
                            </td>
                            <td class="text-xs font-weight-bold">
                                <span class="my-2 text-xs">{{ $professor->Telefone }}</span>
                            </td>
                            <td class="text-xs font-weight-bold">
                                <span class="my-2 text-xs">{{ $professor->Profissao }}</span>
                            </td>
                            <td class="text-xs font-weight-bold">
                                <span class="my-2 text-xs">{{ $professor->Empresa }}</span>
                            </td>
                            <td class="text-xs font-weight-bold">
                                <span class="my-2 text-xs">{{ $professor->Endereco }}  {{ $professor->Numero }}  {{ $professor->Complemento }} <br> {{ $professor->Cidade }} {{ $professor->Estado }} {{ $professor->CEP }} </p> </span>
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
