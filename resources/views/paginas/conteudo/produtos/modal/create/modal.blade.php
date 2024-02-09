<button type="button" class="btn btn-icon btn-3 btn-primary" data-bs-toggle="modal" data-bs-target="#Create">
    <span class="btn-inner--icon"><i class="ni ni-box-2"> </i>
        Novo Produto</button>




<div class="modal fade" id="Create" tabindex="-1" role="dialog" aria-labelledby="Create" aria-hidden="true">
    <div class="modal-dialog modal-danger modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">

            <div class="modal-body">
                <div class="py-3 text-center">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSYQhFy_94bv6cGo0Qxxd1yKfoZSOr88yuRGJPrgFeang&s"
                        class="avatar avatar-xxl  me-3">
                    <!-- <i class="ni ni-bell-55 ni-3x"></i> -->
                    <h4 class="text-gradient text-danger mt-4">Novo Produto
                    </h4>
                </div>
                <div class="card-body">

                    <form role="form text-left">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group has-success">
                                    <i class="ni ni-collection ">

                                        <label>Código</label></i>
                                    <input type="text" placeholder="Success" class="form-control is-valid" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group has-danger">
                                    <label>Nome do Produto</label>
                                    <input type="email" placeholder="Error Input" class="form-control is-invalid" />
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="rememberMe" checked="">
                        <label class="form-check-label" for="rememberMe">Apresentar no Site</label>
                    </div>

                    {!! Form::open(['route' => 'produtos.store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

                    <div class="card-body">
                      <form>
                        <div class="row">
                          <div class="col-md-5 pr-1">
                            <div class="form-group">
                              <label>Nome do Produto</label>
                              {!! Form::text('Nome_Produto', null, ['placeholder' => 'Nome do produto', 'class' => 'form-control']) !!}
                            </div>
                          </div>
                          <div class="col-md-3 px-1">
                            <div class="form-group">
                              <label>Categoria</label>
                              {!! Form::text('Categoria_Produto', null, ['placeholder' => 'Categoria do Produto', 'class' => 'form-control']) !!}
                            </div>
                          </div>
                          <div class="col-md-4 pl-1">
                            <div class="form-group">
                              <label for="exampleInputEmail1">Preço</label>
                              {!! Form::text('Preco_Produto', null, ['placeholder' => 'R$', 'class' => 'form-control']) !!}
                            </div>
            
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-2 pr-1">
                            <div class="form-group">
                              <label>Quantidade em Estoque</label>
                              {!! Form::number('Quantidade_Produto', null, array('class' => 'form-control')) !!}
                            </div>
                          </div>
                          <div class="col-md-2 pl-1">
                            <div class="form-group">
                              <label>Em Estoque?</label>
            
                              
                              <select name="Estoque_Produto" id="Estoque_Produto"
                              class="form-control">
                              <option value=""> Selecione </option>
                              <option value="Não"> Não </option>
                              <option value="Sim"> Sim </option>
                          </select>                </div>
                          </div>
            
                          <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                            <label class="form-check-label" for="flexSwitchCheckDefault">Default switch checkbox input</label>
                          </div>
                          
                          <div class="col-md-2 pl-1">
                            <div class="form-group">
                              <label>Disponível no Site?</label>
            
                              
                              <select id="Status_Produto" name="Status_Produto"
                              class="form-control">
                              <option value=""> Selecione </option>
                              <option value="0"> Desativado </option>
                              <option value="1"> Ativo </option>
                          </select>
                          </div> </div>
                        </div>
            
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label>Descrição do Produto</label>
                              <textarea rows="4" cols="80" id="Descricao" class="form-control" value="Escreva a descrição do produto aqui."> </textarea>
                            </div>
                          </div>
                        </div>
                        <button type="submit"
                        class="btn btn-primary me-1 mb-1 text-light">Salvar
                    </button>
                    </div>
                  </div>
                </div>
               
               
                <div class="col-md-4">
                  <div class="card card-user">
                    <div class="image">
                      <img src="https://www.cursospm3.com.br/wp-content/uploads/2022/04/product-designer-o-que-faz-a-pessoa-de-design-de-produto.png" alt="...">
                    </div>
                    <div class="card-body">
                      <div class="author">
                        <a>
                          <img class="avatar border-gray" src="{{ asset('/images/cart.png') }}" alt="...">
                        </a>
                 
                      </div>
                      <p class="description text-center">
                        <div class="upload">
                            <input type="file" title="" id="image" name="image"  class="drop-here">
                            <div class="text text-drop">Imagem</div>
                            <div class="text text-upload">Enviando</div>
                            <svg class="progress-wrapper" width="300" height="300">
                              <circle class="progress" r="115" cx="150" cy="150"></circle>
                            </svg>
                            <svg class="check-wrapper" width="130" height="130">
                              <polyline class="check" points="100.2,40.2 51.5,88.8 29.8,67.5 "/>
                            </svg>
                            <div class="shadow"></div>
                          </div> 
                      </p> 
            
            
                   
            </div>
            </form>

                    <div class="text-center">
                        <button type="button"
                            class="btn btn-round bg-gradient-info btn-lg w-100 mt-4 mb-0">Salvar</button>
                    </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
