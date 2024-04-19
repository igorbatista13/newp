{{-- ALUNOS --}}
@include('paginas.base.topo.topo')
@include('paginas.mensagens.mensagem')

{{-- SMENU ALUNOS --}}
{{-- @include('paginas.conteudo.alunos.1_alunos') --}}
@include('paginas.conteudo.alunos.menu_alunos')



<div class="container-fluid py-0">
    <div class="row">
        <div class="col-xl-9">
            <div class="row my-4">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-10 my-auto">
                                    <div class="numbers">
                                        {{-- <p class="text-sm text-success mb-0 text-capitalize font-weight-bold opacity-7">Atualizado
                                        </p> --}}
                                        <h5 class="font-weight-bolder mb-0">
                                            ÚLTIMOS USUÁRIOS CADASTRADOS
                                        </h5>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="table-responsive">

                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Nome</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        </th>

                                        <th> Plano </th>
                                        <th> </th>


                                    </tr>
                                </thead>
                                @foreach ($alunos as $aluno)
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div>
                                                        <img src="{{ asset('/images/usuarios/') }}/{{ $aluno->image }}"
                                                            class="avatar avatar-sm me-3" alt="avatar image">

                                                    </div>
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">{{ $aluno->Nome_Completo }}</h6>
                                                        <p class="text-sm text-secondary mb-0">{{ $aluno->Email }}</p>
                                                        <span
                                                            class="badge bg-warning me-0">{{ $aluno->Perfil !== null ? $aluno->Perfil : 'Não informado' }}</span>

                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                @if (!empty($aluno->modalidade_id))
                                                    @php
                                                        $modalidades = json_decode($aluno->modalidade_id, true);
                                                    @endphp

                                                    @if ($modalidades !== null)
                                                        @foreach ($modalidades as $modalidadeId)
                                                            <div class="d-flex px-0 py-1">
                                                                {{-- <span class="badge bg-warning me-0"> </span> --}}
                                                                <div class="d-flex flex-column justify-content-center">
                                                                    <small class="mb-0 text-sm text-bold">
                                                                        <img src="https://img.elo7.com.br/product/zoom/33F8A2D/adesivo-de-parede-academia-fitness-musculacao-crossfit-peso-crossfit.jpg"
                                                                            class="" width="30px"
                                                                            alt="avatar image">

                                                                        {{ \App\Models\Modalidades::find($modalidadeId)->Nome_Modalidade }}
                                                                    </small>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    @endif
                                                @endif

                                            </td>
                        </div>
                        <td>
                            @foreach ($aluno->matriculas as $matricula)
                                {{-- @foreach ($aluno->matriculas as $matricula) --}}
                                {{-- <b> Matrícula: </b> {{ $aluno->matriculas->id }} --}}
                                <span
                                    class="badge {{ $badgeClasses[$loop->index % count($badgeClasses)] }} me-3">{{ $matricula->planos->Nome_Plano }}</span>
                            @endforeach
                        </td>
                        <td>
                            @include('/paginas/conteudo/alunos/modal/edit')
                            {{-- @include('/paginas/conteudo/planos/modal/edit') --}}
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

    <div class="col-md-3">
        <div class="card-body p-4">
            <div class="card">

                <div class="card-header pb-0 p-3">
                    <h6 class="mb-0">Resumo</h6>
                </div>
                <div class="card-body p-3">
                    <ul class="list-group">
                        <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                            <div class="d-flex align-items-center">
                                <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                                    <i class="ni ni-mobile-button text-white opacity-10"></i>
                                </div>
                                <div class="d-flex flex-column">
                                    <h6 class="mb-1 text-dark text-sm">Alunos</h6>
                                    <span class="text-xs">250 in stock, <span class="font-weight-bold">346+
                                            sold</span></span>
                                </div>
                            </div>
                            <div class="d-flex">
                                <button
                                    class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i
                                        class="ni ni-bold-right" aria-hidden="true"></i></button>
                            </div>
                        </li>
                        <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                            <div class="d-flex align-items-center">
                                <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                                    <i class="ni ni-tag text-white opacity-10"></i>
                                </div>
                                <div class="d-flex flex-column">
                                    <h6 class="mb-1 text-dark text-sm">Professores</h6>
                                    <span class="text-xs">123 closed, <span class="font-weight-bold">15
                                            open</span></span>
                                </div>
                            </div>
                            <div class="d-flex">
                                <button
                                    class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i
                                        class="ni ni-bold-right" aria-hidden="true"></i></button>
                            </div>
                        </li>
                        <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                            <div class="d-flex align-items-center">
                                <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                                    <i class="ni ni-box-2 text-white opacity-10"></i>
                                </div>
                                <div class="d-flex flex-column">
                                    <h6 class="mb-1 text-dark text-sm">Modalidades</h6>
                                    <span class="text-xs">1 is active, <span class="font-weight-bold">40
                                            closed</span></span>
                                </div>
                            </div>
                            <div class="d-flex">
                                <button
                                    class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i
                                        class="ni ni-bold-right" aria-hidden="true"></i></button>
                            </div>
                        </li>
                        <li class="list-group-item border-0 d-flex justify-content-between ps-0 border-radius-lg">
                            <div class="d-flex align-items-center">
                                <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                                    <i class="ni ni-satisfied text-white opacity-10"></i>
                                </div>
                                <div class="d-flex flex-column">
                                    <h6 class="mb-1 text-dark text-sm">Planos</h6>
                                    <span class="text-xs font-weight-bold">+ 430</span>
                                </div>
                            </div>
                            <div class="d-flex">
                                <button
                                    class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i
                                        class="ni ni-bold-right" aria-hidden="true"></i></button>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


@include('paginas.conteudo.alunos.blocos')

{{-- Rodapé --}}
@include('paginas.base.rodape.rodape')
