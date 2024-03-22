{{-- ALUNOS MODAL EDITAR --}}




<button class="btn btn-icon btn-outline-dark ms-2 export" data-bs-toggle="modal" data-bs-target="#EditUsuario_{{ $aluno->id }}"
    type="button">
    <span class="btn-inner--icon"><i class="fa fa-edit"></i></span>
    <span class="btn-inner--text"> Editar Usuário </span>
</button>




<div class="modal fade" id="EditUsuario_{{ $aluno->id }}" tabindex="-1" aria-labelledby="EditUsuario_{{ $aluno->id }}" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="" id="EditUsuariosLabel"> Editar Usuário <b>
                    </b> </h5>
                <button type="button" class="btn btn-dark" data-bs-dismiss="modal" aria-label="Close">Fechar
                    (X)</button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <div class="container-fluid py-2">

                        {!! Form::model($alunos, ['method' => 'PATCH', 'enctype' => 'multipart/form-data', 'route' => ['alunos.update', $aluno->id]] ) !!}

                        {{-- {!! Form::open(['route' => 'alunos.store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!} --}}

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
                                                    <h5 class="font-weight-bolder text-center">Foto</h5>

                                                    <img src="{{ asset('/images/usuarios/') }}/{{ $aluno->image }}"
                                                    class="avatar avatar-xl position-relative" alt="avatar image">

                                            <input type="file" name="image" id="image" class="form-control">

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

                                        <h5 class="font-weight-bolder">Informação Pessoais </h5>
                                        <div class="row">
                                            <div class="col-6 ">
                                                <label  class="mt-3" >Nome Completo</label>
                                                {!! Form::text('Nome_Completo', $aluno->Nome_Completo, ['class' => 'form-control']) !!}
                                            </div>
                                            <div class="col-6 col-sm-4 mt-3 mt-sm-0">
                                                <label  class="mt-3">E-mail</label>
                                                {!! Form::text('Email',  $aluno->Email, ['class' => 'form-control valid']) !!}
                                            </div>
                                            <div class="col-2 col-sm-4 mt-3 mt-sm-0">
                                                <label  class="mt-3">CPF</label>
                                                {!! Form::text('CPF',  $aluno->CPF, ['class' => 'form-control']) !!}
                                            </div>
                                            <div class="col-2 col-sm-4 mt-3 mt-sm-0">
                                                <label  class="mt-3" >RG</label>
                                                {!! Form::text('RG',  $aluno->RG, ['class' => 'form-control']) !!}
                                            </div>
                                            <div class="col-2 col-sm-4 mt-3 mt-sm-0">
                                                <label  class="mt-3">Sexo</label>
                                                <select name="Sexo" id="Sexo" class="form-select">
                                                    <option value="" {{ $aluno->Sexo == '' ? 'selected' : '' }}>Não declarado</option>
                                                    <option value="Masculino" {{ $aluno->Sexo == 'Masculino' ? 'selected' : '' }}>Masculino</option>
                                                    <option value="Feminino" {{ $aluno->Sexo == 'Feminino' ? 'selected' : '' }}>Feminino</option>
                                                </select>
                                            </div>

                                        </div>
                                        <div class="row">

                                            <div class="col-3">
                                                <label class="mt-4">Data de Nascimento</label>
                                                {!! Form::date('Data_Nascimento', $aluno->Data_Nascimento, ['class' => 'form-control']) !!}
                                            </div>
                                            <div class="col-3">
                                                <label class="mt-4">Telefone</label>
                                                {!! Form::text('Telefone',  $aluno->Telefone, ['class' => 'form-control']) !!}
                                            </div>
                                            <div class="col-sm-3">
                                                <label class="mt-4">Profissão</label>
                                                {!! Form::text('Profissao',  $aluno->Profissao, ['class' => 'form-control']) !!}
                                            </div>
                                            <div class="col-sm-3">
                                                <label class="mt-4">Empresa</label>
                                                {!! Form::text('Empresa',  $aluno->Empresa, ['class' => 'form-control']) !!}
                                            </div>
                                        </div>
                
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-sm-4">
                                <div class="card">
                                    <div class="card-body">
                                        {{-- <img class="w-30 border-radius-lg shadow-lg mt-0" src="https://img.freepik.com/vetores-premium/modelo-de-logotipo-de-icone-de-academia-com-barra-haltere-design-de-logotipo-de-fitness_757387-345.jpg?w=2000"
                                        alt="product_image" width="200px">   --}}
                                        <h5 class="font-weight-bolder">Modalidades</h5>
                                        {{-- @foreach ($modalidades as $modalidade)
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="modalidade_id[]"
                                                    id="modalidade_{{ $modalidade->id }}" value="{{ $modalidade->id }}">
                                                <label class="form-check-label" for="modalidade_{{ $modalidade->id }}">
                                                    {{ $modalidade->Nome_Modalidade }}
                                                </label>
                                            </div>
                                        @endforeach --}}
                                    </div>
                                    <div class="card-body">
                                        {{-- <img class="w-30 border-radius-lg shadow-lg mt-0" src="https://img.freepik.com/vetores-premium/modelo-de-logotipo-de-icone-de-academia-com-barra-haltere-design-de-logotipo-de-fitness_757387-345.jpg?w=2000"
                                        alt="product_image" width="200px">   --}}
                                        <h5 class="font-weight-bolder">Perfil</h5>
                                        <select name="Perfil" id="Perfil" class="form-select">
                                            <option value="">Selecione</option>
                                            <option value="Aluno">Aluno</option>
                                            <option value="Professor">Professor</option>
                                            <option value="Funcionario">Funcionário</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-8 mt-sm-0 mt-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <h5 class="font-weight-bolder">Endereço</h5>
                                            <div class="col-3">
                                                <label>CEP</label>
                                                {!! Form::text('CEP', null, ['class' => 'form-control']) !!}
                                            </div>
                                            <div class="col-4">
                                                <label>Endereço</label>
                                                {!! Form::text('Endereco', null, ['class' => 'form-control']) !!}

                                            </div>
                                            <div class="col-2">
                                                <label>Número</label>
                                                {!! Form::text('Numero', null, ['class' => 'form-control']) !!}
                                            </div>
                                            <div class="col-5">
                                                <label>Complemento</label>
                                                {!! Form::text('Complemento', null, ['class' => 'form-control']) !!}
                                            </div>
                                            <div class="col-5">
                                                <label>Bairro</label>
                                                {!! Form::text('Bairro', null, ['class' => 'form-control']) !!}
                                            </div>
                                            <div class="col-5">
                                                <label>Cidade</label>
                                                {!! Form::text('Cidade', null, ['class' => 'form-control']) !!}
                                            </div>
                                            <div class="col-5">
                                                <label for="estado">Estado</label>
                                                <select name="Estado" id="Estado" class="form-select">
                                                    <option value="">Selecione um estado</option>
                                                    <option value="Acre">Acre</option>
                                                    <option value="Alagoas">Alagoas</option>
                                                    <option value="Amapá">Amapá</option>
                                                    <option value="Amazonas">Amazonas</option>
                                                    <option value="Bahia">Bahia</option>
                                                    <option value="Ceará">Ceará</option>
                                                    <option value="Distrito Federal">Distrito Federal</option>
                                                    <option value="Espírito Santo">Espírito Santo</option>
                                                    <option value="Goiás">Goiás</option>
                                                    <option value="Maranhão">Maranhão</option>
                                                    <option value="Mato Grosso">Mato Grosso</option>
                                                    <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
                                                    <option value="Minas Gerais">Minas Gerais</option>
                                                    <option value="Pará">Pará</option>
                                                    <option value="Paraíba">Paraíba</option>
                                                    <option value="Paraná">Paraná</option>
                                                    <option value="Pernambuco">Pernambuco</option>
                                                    <option value="Piauí">Piauí</option>
                                                    <option value="Rio de Janeiro">Rio de Janeiro</option>
                                                    <option value="Rio Grande do Norte">Rio Grande do Norte</option>
                                                    <option value="Rio Grande do Sul">Rio Grande do Sul</option>
                                                    <option value="Rondônia">Rondônia</option>
                                                    <option value="Roraima">Roraima</option>
                                                    <option value="Santa Catarina">Santa Catarina</option>
                                                    <option value="São Paulo">São Paulo</option>
                                                    <option value="Sergipe">Sergipe</option>
                                                    <option value="Tocantins">Tocantins</option>
                                                </select>
                                            </div>

                                        </div>
                                        {{-- <div class="row">
                                            <div class="col-sm-8 mt-sm-2 mt-4">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="Status_Produto" value="Sim">
                                                    <label class="form-check-label" for="site">Disponível no
                                                        site?</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-8 mt-sm-1 mt-4">
                                                <div class="form-check form-switch">

                                                    <input class="form-check-input" type="checkbox"
                                                        name="Estoque_Produto" value="Sim">
                                                    <label class="form-check-label" for="Estoque">Produto em
                                                        Estoque?</label>
                                                </div>
                                            </div>
                                        </div> --}}
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
