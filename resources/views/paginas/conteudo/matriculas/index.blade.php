@include('paginas.base.topo.topo')
@include('paginas.mensagens.mensagem')
@include('paginas.conteudo.matriculas.menu_matricula')

<div class="container-fluid py-0">

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="table-responsive">
                <table class="table table-flush" id="datatable-search">
                    <thead class="thead-light">
                        <tr>
                            <th>N° Matrícula</th>
                            <th>Nome</th>
                            <th>Plano</th>
                            <th>Data da Matrícula</th>
                            <th> </th>
                        </tr>
                    </thead>
                    @foreach ($alunos as $aluno)
                    <tbody>
                        <tr>
                            <td class="text-xs font-weight-bold">
                                <div class="d-flex align-items-center">                                
                                    <p class="text-xs font-weight-bold ms-2 mb-0">{{ $aluno->id }}</p>
                                </div>
                            </td>
                            <td class="text-xs font-weight-bold">
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('/images/usuarios/') }}/{{ $aluno->image }}"

                                   class="avatar avatar-x me-2"
                                        alt="user image">
                                    <span>{{ $aluno->Nome_Completo }}</span>
                                </div>
                            </td>
                  
                            <td class="text-xs font-weight-bold">
                                @foreach ($aluno->matriculas as $matricula)

                                <div class="d-flex align-items-center">
                                    <button
                                        class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-2 btn-sm d-flex align-items-center justify-content-center"><i
                                            class="fas fa-check" aria-hidden="true"></i></button>
                                    <span>{{ $matricula->planos->Nome_Plano }} </span>
                                </div>
                                @endforeach

                            </td>
                            <td class="text-xs font-weight-bold">
                                <span class="my-2 text-xs">{{ $aluno->created_at->format('d/m/Y H:i:s') }}</span>
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
