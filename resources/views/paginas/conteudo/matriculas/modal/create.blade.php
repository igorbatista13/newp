{{-- MATRICULAS MODAL CRIAR --}}




<button class="btn btn-icon btn-outline-dark ms-2 export" data-bs-toggle="modal" data-bs-target="#CreateMatriculas"
    type="button">
    <span class="btn-inner--icon"><i class="fa fa-plus"></i></span>
    <span class="btn-inner--text"> Matrículas </span>
</button>




<div class="modal fade" id="CreateMatriculas" tabindex="-1" aria-labelledby="CreateMatriculas" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="" id="CreateMatriculasLabel"> Nova Matrícula <b>
                    </b> </h5>
                <button type="button" class="btn btn-dark" data-bs-dismiss="modal" aria-label="Close">Fechar
                    (X)</button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <div class="container-fluid py-2">
                        {!! Form::open(['route' => 'alunos.matricula', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

                        <div class="row mt-3">
                            <div class="col-lg-3">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <h5 class="font-weight-bolder"></h5>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="card-body">
                                                    {{-- <img class="w-50 border-radius-lg shadow-lg mt-0" src="https://img.freepik.com/vetores-premium/modelo-de-logotipo-de-icone-de-academia-com-barra-haltere-design-de-logotipo-de-fitness_757387-345.jpg?w=2000"
                                                        alt="product_image" width="200px">   --}}

                                                    <h5 class="font-weight-bolder">Planos</h5>
                                                    @foreach ($plano as $planos)
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="planos_id" id="plano{{ $planos->id }}"
                                                                value="{{ $planos->id }}">
                                                            <label class="form-check-label"
                                                                for="plano{{ $planos->id }}">
                                                                <span
                                                                    class="badge {{ $badgeClasses[$loop->index % count($badgeClasses)] }} me-3">{{ $planos->Nome_Plano }}</span>
                                                            </label>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                            <div class="col-lg-12 mt-5">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-9 mt-lg-0 mt-4">
                                <div class="card">
                                    <div class="card-body">

                                        <h5 class="font-weight-bolder">Nome do Aluno </h5>
                                        <div class="row">
                                            <div class="card-body">
                                                <input type="hidden" id="alunoId" name="alunos_id" value="">

                                                <input type="text" id="termoAluno" class="form-control"
                                                    placeholder="Digite o nome">
                                                <div id="resultado"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Salvar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
