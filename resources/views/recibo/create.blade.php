@extends('base.base')
@section('content')
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css" rel="stylesheet" />

    <link id="theme-style" rel="stylesheet" href="{{ asset('css/step-by-step/style.css') }}">

    <div class="panel-header panel-header-sm">
    </div>
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-12 ml-auto mr-auto">
                    <div class="card card-upgrade">
                        <div class="card-header">


                            <!--//row-->

                            <section id="multiple-column-form">
                                <div class="row match-height">
                                    <div class="col-12">

                                        <br>
                                        <div class="text-center mb-5">
                                            <img src="{{ asset('/images/i.webp') }}" height="88" class='mb-4'>
                                            <h3>RECIBOS</h3>
                                            <p>Crie os seus recibos aqui!</p>
                                        </div>


                                        {!! Form::open(['route' => 'recibos.store', 'method' => 'POST']) !!}

                                        <div class="container">
                                            <div id="app">
                                                <step-navigation :steps="steps" :currentstep="currentstep">
                                                </step-navigation>

                                                <div v-show="currentstep == 1">
                                                    <h3>Passo 1</h3>
                                                    <div class="row">
                                                        <div class="col-md-5 col-12">

                                                            <label for="first-name-column"><strong> Cliente
                                                                </strong></label>

                                                            <select name="empresa_cliente_id" id="empresa_cliente_id"
                                                                class="form-control">
                                                                <option value="1"> Selecione a empresa </option>
                                                                @foreach ($empresa_cliente as $empresa_clientes)
                                                                    <option value="{{ $empresa_clientes->id }}">
                                                                        {{ $empresa_clientes->Nome_fantasia }} </option>
                                                                @endforeach
                                                            </select>


                                                            {{-- {!! Form::text('ParmPerfilAcessoNivel', null, array('placeholder' => 'Nome Completo','class' => 'form-control')) !!} --}}

                                                            <!-- <input type="text" id="first-name-column" name="name" class="form-control" placeholder="Nome completo"> -->
                                                        </div>

                                                        <div class="col-md-3 col-12">
                                                            <div class="form-group has-icon-left">
                                                                <label for="email-id-column"><strong> Data de Entrega
                                                                    </strong></label>
                                                                <div class="position-relative">

                                                                    {!! Form::date('DataEntrega', null, ['placeholder' => 'E-mail', 'class' => 'form-control']) !!}



                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="col-md-3 col-12">
                                                            <div class="form-group has-icon-left">
                                                                <label for="email-id-column"> <strong> Data de Retirada
                                                                    </strong></label>
                                                                <div class="position-relative">

                                                                    {!! Form::date('DataRetirada', null, ['placeholder' => 'E-mail', 'class' => 'form-control']) !!}


                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>

                                                <div v-show="currentstep == 2">
                                                    <br>

                                                    <center>
                                                        <h3>Selecione os Produtos e Quantidades</h3>
                                                    </center>
                                                    <div class="card-body">
                                                        <table class="table" id="products_table">
                                                            <thead>
                                                                <tr>
                                                                    <th>
                                                                        <h3> <strong> Produto: </strong> </h3>
                                                                    </th>
                                                                    <th>
                                                                        <h3> <strong> Quantidade: </strong> </h3>
                                                                    </th>
                                                                    <!-- <th>Preço</th> -->
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr id="product0">
                                                                    <td>
                                                                        <select name="products[]"
                                                                            class="form-control id_select2_example">
                                                                            <option value="">-- Selecione o produto --
                                                                            </option>
                                                                            @foreach ($produto as $produtos)
                                                                                <option value="{{ $produtos->id }}"
                                                                                    data-img_ssrc="{{ asset('/img/produtos/') }}/{{ $produtos->image }}">
                                                                                    <b> {{ $produtos->Nome_Produto }} |
                                                                                        {{ "R$ " . number_format($produtos->Preco_Produto, 2, ',', '.') }}
                                                                                    </b>
                                                                            @endforeach
                                                                            </option>

                                                                        </select>
                                                                    </td>
                                                                    <td>


                                                                        <input type="number" name="quantities[]"
                                                                            class="form-control" value="1" />
                                                                    </td>

                                                                </tr>
                                                                <tr id="product1"></tr>
                                                            </tbody>
                                                        </table>


                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <button id="add_row" class="btn btn-success pull-left"> +
                                                                    Adicionar Produto</button>
                                                                <button id='delete_row' class="pull-right btn btn-danger"> -
                                                                    Deletar</button>
                                                            </div>
                                                        </div>

                                                        <br><br>
                                                    </div>
                                                </div>

                                                <div v-show="currentstep == 3">
                                                    <h3>Passo 3</h3>
                                                    <br>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-md-5 col-12">

                                                                <label for="first-name-column"><strong> Observações:
                                                                    </strong></label>
                                                                <input class="form-control" name="Observacoes"
                                                                    rows="4"
                                                                    value="Custo de R$ 24,00 por toalha manchada, rasgada ou extraviada.">

                                                            </div>

                                                            <div class="col-md-2 col-12">
                                                                <label for="validationDefaultUsername" data-toggle="tooltip"
                                                                    data-placement="top"
                                                                    title="Taxa de Entrega ou outro valor que desejar utilizar.">
                                                                    <strong> Taxa: </strong>
                                                                    <i class="now-ui-icons business_bulb-63"> </i>
                                                                </label>

                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text"
                                                                            id="inputGroupPrepend2">R$</span>
                                                                    </div>
                                                                    <input type="text" class="form-control"
                                                                        id="Taxa" data-mask-selectonfocus="true"
                                                                        name="Taxa">
                                                                </div>

                                                            </div>
                                                            <div class="col-md-2 col-12">
                                                                <label for="validationDefaultUsername" data-toggle="tooltip"
                                                                    data-placement="top"
                                                                    title="Caso houver preencha o valor do desconto">
                                                                    <strong> Desconto: </strong>
                                                                    <i class="now-ui-icons business_bulb-63"> </i>
                                                                </label>

                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text"
                                                                            id="inputGroupPrepend2">R$</span>
                                                                    </div>
                                                                    <input type="text" class="form-control"
                                                                        id="Desconto" data-mask-selectonfocus="true"
                                                                        name="Desconto">
                                                                    <button type="button" class="btn btn-danger"
                                                                        data-toggle="popover"
                                                                        title="utilize o ponto (.) em vez de vírgula para declara o valor"
                                                                        data-content="utilize o ponto (.) em vez de vírgula para declara o valor">Clqiue
                                                                        para ler a Dica</button>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="textarea"> <b> Mensagem para o Cliente: </b></label>
                                                        <input class="form-control" name="MensagemCliente" rows="4"
                                                            value="Leve Limpo agradece a preferência."> </textarea>
                                                    </div>

                                                </div>


                                                <step v-for="step in steps" :currentstep="currentstep"
                                                    :key="step.id" :step="step" :stepcount="steps.length"
                                                    @step-change="stepChanged"> </step>

                                                <script type="x-template" id="step-navigation-template">
                            <ol class="step-indicator">
                                <li v-for="step in steps" is="step-navigation-step" :key="step.id" :step="step" :currentstep="currentstep">
                                </li>
                            </ol>
                        </script>

                                                <script type="x-template" id="step-navigation-step-template">
                            <li :class="indicatorclass">
                                <div class="step"><i :class="step.icon_class"></i></div>
                                <div class="caption hidden-xs hidden-sm">Passo <span v-text="step.id"></span>: <span v-text="step.title"></span></div>
                            </li>
                        </script>

                                                <script type="x-template" id="step-template">
                            <div class="step-wrapper" :class="stepWrapperClass">
                                <button type="button" class="btn btn-primary" @click="lastStep" :disabled="firststep">
                                    Voltar
                                </button>
                                <button type="button" class="btn btn-primary" @click="nextStep" :disabled="laststep">
                                    Próximo
                                </button>

                                <input type="submit" class="btn btn-primary" @click="nextStep" :disabled="firststep" value="Salvar Recibo"/>

                            
                            </div>
                        </script>


                                            </div>
                                        </div>

                                        </form>

                                        {!! Form::close() !!}

                                        </form>

                                    </div>
                                </div>
                        </div>
                    </div>
                </div>

            </div>
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
            <script type="text/javascript">
                function swapImage() {
                    var image = document.getElementById("imageToSwap");
                    var dropd = document.getElementById("dlist");
                    image.src = dropd.value;
                };
            </script>

            <script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.4.4/vue.js'></script>
            <script src="{{ asset('js/step-by-step/script.js') }}"></script>

            <script>
                $(function() {
                    $('[data-toggle="tooltip"]').tooltip()
                })
            </script>
            </section>
        @endsection
