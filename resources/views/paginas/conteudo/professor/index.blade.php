@include('paginas.base.topo.topo')
@include('paginas.mensagens.mensagem')
@include('paginas.conteudo.professor.menu_professor')


<div class="card shadow-lg mx-4 card-profile-bottom">
    <div class="card-body p-2">
        <div class="row gx-4">
            <div class="col-12">
                <div class="card">
                    <div class="table-responsive">
                        <table class="table table-flush" id="datatable-search">
                            <thead class="thead-light">
                                <tr>
                                    <th>Id</th>
                                    <th>Nome</th>
                                    <th>Status</th>
                                    <th>Modalidade</th>
                                    <th>Planos</th>
                                    <th>Data</th>
                                    <th> Ação</th>
                                </tr>
                            </thead>
                            @foreach ($professores as $aluno)
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="customCheck1">
                                                </div>
                                                <p class="text-xs font-weight-bold ms-2 mb-0">{{ $aluno->id }}</p>
                                            </div>
                                        </td>

                                        <td class="text-xs font-weight-bold">

                                            <div class="d-flex align-items-center">
                                                {{-- <div class="avatar avatar-xs me-2 bg-gradient-primary"> --}}

                                                <div class="avatar avatar-xs me-2 {{ $badgeAvatar[$colorAvatar] }} ">
                                                    {{ substr($aluno->Nome_Completo, 0, 1) }}
                                                </div>
                                                @php

                                                    $colorAvatar = ($colorAvatar + 1) % count($badgeAvatar);
                                                @endphp

                                            </div>
                                            <span>{{ $aluno->Nome_Completo }}</span>

                                        </td>

                                        <td class="text-xs font-weight-bold">
                                            @if ($aluno->matriculas->isNotEmpty())
                                                <button
                                                    class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-2 btn-sm d-flex align-items-center justify-content-center"><i
                                                        class="fas fa-check" aria-hidden="true"></i></button>
                                                <span>Matrículado</span>
                                            @else
                                                <button
                                                    class="btn btn-icon-only btn-rounded btn-outline-danger mb-0 me-2 btn-sm d-flex align-items-center justify-content-center"><i
                                                        class="fas fa-times" aria-hidden="true"></i></button>
                                                <span>Não Matrículado</span>
                                            @endif


                                        </td>

                                        <td class="text-xs font-weight-bold">
                                            <span class="my-2 text-xs">
                                                @foreach ($aluno->modalidades_nomes as $nome_modalidade)
                                                    <span class="badge bg-success">
                                                        {{ $nome_modalidade }}
                                                        @if (!$loop->last)
                                                            ,
                                                        @endif
                                                    </span>
                                                @endforeach
                                            </span>
                                        </td>
                                        <td class="text-xs font-weight-bold">
                                            @foreach ($aluno->planos as $plano)
                                                <span class="badge {{ $badgeClasses[$colorIndex] }} me-0">
                                                    {{ $plano->Nome_Plano }} </span>
                                                @php
                                                    $colorIndex = ($colorIndex + 1) % count($badgeClasses);
                                                @endphp
                                            @endforeach
                                            </span>
                                        </td>
                                        <td class="font-weight-bold">
                                            <span class="my-2 text-xs">{{ $aluno->created_at }}</span>
                                        </td>
                                        <td>
                                            @include('/paginas/conteudo/alunos/modal/edit')

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
</div>

@include('paginas.base.rodape.rodape')
