{{-- CREATE --}}
{{-- NOVO PLANO  --}}



<button class="btn btn-icon btn-outline-dark ms-2 export" data-bs-toggle="modal" data-bs-target="#CreatePlanos"
    type="button">
    <span class="btn-inner--icon"><i class="fa fa-plus"></i></span>
    <span class="btn-inner--text"> Planos</span>
</button>





<div class="modal fade" id="CreatePlanos" tabindex="-1" aria-labelledby="CreatePlanos" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="" id="Create"> Novo Plano <b>
                    </b> </h5>
                <button type="button" class="btn btn-dark" data-bs-dismiss="modal" aria-label="Close">Fechar
                    (X)</button>
            </div>
            <div class="modal-body">


                <div class="card-body">
                    <div class="container-fluid py-2">

                        <div class="row mt-4">
                            <div class="col-lg-4">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <h5 class="font-weight-bolder">Planos</h5>

                                        <div class="table-responsive">
                                            <table class="table align-items-center mb-0">
                                                @foreach ($plano as $key => $planos)
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex px-2 py-0">
                                                                    <span class="badge {{ $badgeClasses[$key % count($badgeClasses)] }} me-3">{{ $planos->id }}</span>
                                                                    <div class="d-flex flex-column justify-content-center">
                                                                        <h6 class="mb-0 text-sm">{{ $planos->Nome_Plano }}</h6>
                                                                        <small class=" text-sm">{{ $planos->Vigencia }}</small>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="align-middle text-center text-sm">
                                                                <span class="badge {{ $badgeClasses[$key % count($badgeClasses)] }} me-3">R$ {{ $planos->Preco }} </span>
                                                                <span class="text-xs font-weight-bold"></span>

                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                @endforeach
                                            </table>
                                        </div>
                                        <div class="row">


                                            <div class="col-lg-12 mt-5">

                                                {!! Form::open(['route' => 'planos.store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

                                                <div class="d-flex">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 mt-lg-0 mt-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="font-weight-bolder">Informação do Plano</h5>
                                        <div class="row">
                                            <div class="col-12 col-sm-6">
                                                <label>Nome do Plano</label>
                                                {!! Form::text('Nome_Plano', null, ['class' => 'form-control', 'required']) !!}
                                            </div>
                                            <div class="col-12 col-sm-6">
                                                <label>Preço</label>
                                                {!! Form::text('Preco', null, ['class' => 'form-control', 'required']) !!}
                                            </div>
                                            <div class="col-12 col-sm-6">
                                                <label>Vigência</label>
                                                <select name="Vigencia" id="Vigencia" class="form-select" required>
                                                    <option value="Mensal">Mensal</option>
                                                    <option value="Trimestral">Trimestral</option>
                                                    <option value="Semestral">Semestral</option>
                                                    <option value="Anual">Anual</option>
                                                </select>
                                            </div>
                                            <div class="col-12 col-sm-12">
                                                <label>Benefícios</label>
                                                {!! Form::text('Beneficos', null, ['class' => 'form-control']) !!}
                                            </div>
                                            <div class="col-12 col-sm-12">
                                                <label>Observação</label>
                                                {!! Form::text('Obs', null, ['class' => 'form-control']) !!}
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-3">
                                                <label class="mt-4">Plano Ativo?</label>
                                                <div class="form-check form-switch">

                                                    <input class="form-check-input" type="checkbox" name="Status" required
                                                        value="Ativo">
                                                    <label class="form-check-label" for="Estoque"> Ativo?</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit"
                                            class="btn btn-round bg-gradient-info btn-lg w-100 mt-4 mb-0">Salvar</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
