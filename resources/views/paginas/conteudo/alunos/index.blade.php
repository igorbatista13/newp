@include('paginas.base.topo.topo')
@include('paginas.mensagens.mensagem')

@include('paginas.conteudo.alunos.menu_alunos')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="table-responsive">
                <table class="table table-flush" id="datatable-search">
                <thead class="thead-light">
                        <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Nome</th>
                            
                            <th
                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                Perfil</th>
                            <th
                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                Matrícula</th>
                            <th
                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Plano</th>                                  
                            <th
                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Modalidade</th>                                  
                            <th
                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($alunos as $aluno)
                            <tr>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <div>
                                            <img src="{{ asset('/images/usuarios/') }}/{{ $aluno->image }}"
                                                class="avatar avatar-sm me-3">
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm"> {{ $aluno->Nome_Completo }} </h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="text-sm text-secondary mb-0">
                                        @if ($aluno->Perfil !== null && $aluno->Perfil !== 'Não informado' && $aluno->Perfil === 'Aluno')
                                            <span class="badge bg-warning me-0">{{ $aluno->Perfil ?? 'Não informado' }}</span>
                                        @endif
                                        @if ($aluno->Perfil !== null && $aluno->Perfil !== 'Não informado' && $aluno->Perfil === 'Professor')
                                            <span class="badge bg-success me-0">{{ $aluno->Perfil ?? 'Não informado' }}</span>
                                        @endif
                                        @if ($aluno->Perfil !== null && $aluno->Perfil !== 'Não informado' && $aluno->Perfil === 'Funcionario')
                                            <span class="badge bg-danger me-0">{{ $aluno->Perfil ?? 'Não informado' }}</span>
                                        @endif
                                    </p>
                                </td>
                                
                                <td>
                                    @if ($aluno->matriculas->isNotEmpty())
                                            <button
                                                class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-2 btn-sm d-flex align-items-center justify-content-center">
                                                <i class="fas fa-check" aria-hidden="true"></i></button>
                                        @else
                                            <button
                                                class="btn btn-icon-only btn-rounded btn-outline-danger mb-0 me-2 btn-sm d-flex align-items-center justify-content-center">
                                                <i class="fas fa-times" aria-hidden="true"></i></button>
                                        @endif

                                </td>
                                <td>
                                        @foreach($aluno->planos as $plano)
                                        <span class="badge badge-dot me-4">

                                        <i class="bg-danger"></i>
                                        <span class="text-dark">
                                           {{ $plano->Nome_Plano }} </span>
                                        
                                        </span>
                                        @endforeach
                                </td>
                                <td class="align-middle text-center text-sm">
                                    @foreach ($aluno->modalidades_nomes as $nome_modalidade)
                                        <span class="badge bg-success">
                                            {{ $nome_modalidade }}
                                            @if (!$loop->last)
                                                
                                            @endif
                                        </span>
                                    @endforeach
                                </td>
                      
                                <td class="align-middle text-center">
                                    <span class="text-secondary text-sm">
                                        @include('/paginas/conteudo/alunos/modal/edit')</span>
                                </td>
                            </tr>
                        </tbody>

                        {{-- <div class="col-lg-12 mt-lg-0 mt-4">

                            <div class="card card-body" id="profile">
                                <div class="row justify-content-center align-items-center">
                                    <div class="col-sm-auto col-4">
                                        <div class="avatar avatar-xl position-relative">
                                            <img src="{{ asset('/images/usuarios/') }}/{{ $aluno->image }}"
                                                alt="bruce" class="w-100 border-radius-lg shadow-sm">
                                        </div>
                                    </div>
                                    <div class="col-sm-auto col-8 my-auto">
                                        <div class="h-100">
                                            <h5 class="mb-1 font-weight-bolder">
                                                {{ $aluno->Nome_Completo }} </h5>
                                            <p class="mb-0 font-weight-bold text-sm">
                                                @if ($aluno->Perfil !== null && $aluno->Perfil !== 'Não informado' && $aluno->Perfil === 'Aluno')
                                                    <span
                                                        class="badge bg-warning me-0">{{ $aluno->Perfil }}</span>
                                                @endif
                                                @if ($aluno->Perfil !== null && $aluno->Perfil !== 'Não informado' && $aluno->Perfil === 'Professor')
                                                    <span
                                                        class="badge bg-success me-0">{{ $aluno->Perfil }}</span>
                                                @endif
                                                @if ($aluno->Perfil !== null && $aluno->Perfil !== 'Não informado' && $aluno->Perfil === 'Funcionario')
                                                    <span
                                                        class="badge bg-danger me-0">{{ $aluno->Perfil }}</span>
                                                @endif
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-sm-auto ms-sm-auto mt-sm-0 mt-3 d-flex">
                                        <label class="form-check-label mb-0">
                                            <small id="profileVisibility">
                                                @include('/paginas/conteudo/alunos/modal/edit')
                                            </small>
                                            <small id="profileVisibility">
                                                @include('/paginas/conteudo/alunos/modal/webcam')
                                            </small>

                                        </label>
                                        <div class="form-check form-switch ms-2">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>


@include('paginas.base.rodape.rodape')
