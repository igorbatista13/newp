@include('paginas.base.topo.topo')
@include('paginas.mensagens.mensagem')

@include('paginas.conteudo.alunos.menu_alunos')

{{-- resources\views\paginas\conteudo\alunos\index.blade.php --}}

<div class="card shadow-lg mx-4 card-profile-bottom">
    <div class="card-body p-2">
        <div class="row gx-4">
            <div class="col-12">
                <div class="card">
                    <table class='table datatable' id="table1">

                        <thead class="thead-light">
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    NOME</th>

                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    PERFIL</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    MATRÍCULA</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    PLANO</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    MODALIDADE</th>
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
                                                <span
                                                    class="badge bg-warning me-0">{{ $aluno->Perfil ?? 'Não informado' }}</span>
                                            @endif
                                            @if ($aluno->Perfil !== null && $aluno->Perfil !== 'Não informado' && $aluno->Perfil === 'Professor')
                                                <span
                                                    class="badge bg-success me-0">{{ $aluno->Perfil ?? 'Não informado' }}</span>
                                            @endif
                                            @if ($aluno->Perfil !== null && $aluno->Perfil !== 'Não informado' && $aluno->Perfil === 'Funcionario')
                                                <span
                                                    class="badge bg-danger me-0">{{ $aluno->Perfil ?? 'Não informado' }}</span>
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
                                        @foreach ($aluno->planos as $plano)
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
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('/pdv/js/plugins/datatable-simple.js') }}"></script>


@include('paginas.base.rodape.rodape')
