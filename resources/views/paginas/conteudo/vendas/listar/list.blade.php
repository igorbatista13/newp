<div class="container-fluid py-4">
    <div class="card mb-4">
      <div class="card-body px-0 pt-0 pb-2">
        <div class="table-responsive p-0">
          <table class="table align-items-center mb-0">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ITENS</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Quantidade
                </th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Preço</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Ação
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <div class="d-flex px-2 py-1">
                    <div>
                      <img
                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSYQhFy_94bv6cGo0Qxxd1yKfoZSOr88yuRGJPrgFeang&s"
                        class="avatar avatar-sm me-3" alt="user1">
                    </div>
                    <div class="d-flex flex-column justify-content-center">
                      <h6 class="mb-0 text-sm">Coca Cola 2L</h6>
                      <p class="text-xs text-secondary mb-0">Descrição do produto</p>
                    </div>
                  </div>
                </td>
                <td>
                  <span class="badge bg-gradient-success">1</span>
                </td>
                <td>
                  <span class="badge bg-gradient-success">R$ 10,00</span>
                </td>
                <td class="align-middle text-center">
                  <button type="button" class="btn btn-link text-danger text-gradient px-3 mb-0"
                    data-bs-toggle="modal" data-bs-target="#EDITAR"><i class="far fa-trash-alt fa-2x me-2"
                      aria-hidden="true"></i></button>
                      
                  <div class="modal fade" id="EDITAR" tabindex="-1" role="dialog" aria-labelledby="EDITAR"
                    aria-hidden="true">
                    <div class="modal-dialog modal-danger modal-dialog-centered modal-lg" role="document">
                      <div class="modal-content">

                        <div class="modal-body">
                          <div class="py-3 text-center">
                            <img
                              src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSYQhFy_94bv6cGo0Qxxd1yKfoZSOr88yuRGJPrgFeang&s"
                              class="avatar avatar-xxl  me-3">
                            <!-- <i class="ni ni-bell-55 ni-3x"></i> -->
                            <h4 class="text-gradient text-danger mt-4">Deseja excluir este produto?</h4>
                          </div>
                          <div class="card-body">

                            <div class="text-center">
                              <button type="button"
                                class="btn btn-round bg-gradient-danger btn-lg w-100 mt-4 mb-0">Excluir</button>

                            </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

              </tr>
              <tr>
                <td>
                  <div class="d-flex px-2 py-1">
                    <div>
                      <img
                        src="https://shoppr.com.br/cdn/shop/products/Imagem1_ca1e4f8f-a188-49df-8b20-b0b05a9af929_2048x.png?v=1628118810"
                        class="avatar avatar-sm me-3" alt="user2">
                    </div>
                    <div class="d-flex flex-column justify-content-center">
                      <h6 class="mb-0 text-sm">Carvão 3kg</h6>
                      <p class="text-xs text-secondary mb-0">Descrição do produto</p>
                    </div>
                  </div>
                </td>
                <td>
                  <span class="badge bg-gradient-success">1</span>
                </td>
                <td>
                  <span class="badge bg-gradient-success">R$ 10,00</span>
                </td>

                <td class="align-middle text-center">




                  <button type="button" class="btn btn-link text-danger text-gradient px-3 mb-0"
                    data-bs-toggle="modal" data-bs-target="#EDITAR"><i class="far fa-trash-alt fa-2x me-2"
                      aria-hidden="true"></i></button>
                  <div class="modal fade" id="EDITAR" tabindex="-1" role="dialog" aria-labelledby="EDITAR"
                    aria-hidden="true">
                    <div class="modal-dialog modal-danger modal-dialog-centered modal-lg" role="document">
                      <div class="modal-content">

                        <div class="modal-body">
                          <div class="py-3 text-center">
                            <img
                              src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSYQhFy_94bv6cGo0Qxxd1yKfoZSOr88yuRGJPrgFeang&s"
                              class="avatar avatar-xxl  me-3">
                            <!-- <i class="ni ni-bell-55 ni-3x"></i> -->





                            <h4 class="text-gradient text-danger mt-4">Deseja excluir este produto?</h4>
                          </div>
                          <div class="card-body">

                            <div class="text-center">
                              <button type="button"
                                class="btn btn-round bg-gradient-danger btn-lg w-100 mt-4 mb-0">Excluir</button>

                            </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </td>


              </tr>




            </tbody>
          </table>
        </div>

      </div>

    </div>
    <div class="d-flex align-items-center">
      <p class="mb-0">Obs.</p>

      <button type="button" class="btn btn-success btn-lg ms-auto" data-bs-toggle="modal"
        data-bs-target="#Finalizar_Venda">
        Finalizar Venda
      </button>

      <div class="modal fade" id="Finalizar_Venda" tabindex="-1" role="dialog" aria-labelledby="Finalizar_Venda"
        aria-hidden="true">
        <div class="modal-dialog modal-danger modal-dialog-centered modal-lg" role="document">
          <div class="modal-content">

            <div class="modal-body">


              <div class="py-3 text-center">
                <i class="fas fa-heart fa-4x"></i>
                <h4 class="text-gradient text-success mt-4">Total a pagar</h4>
                <h5 class="text-gradient text-danger">R$ 10,00 </h4>

              </div>

              <i class="fas fa-money-bill fa-2x"></i> Dinheiro<br>
              <i class="fas fa-credit-card fa-2x"></i>Cartão de Crédito/Débito<br>



            </div>
            <div class="card-body">
              <div class="text-center">
                <button type="button"
                  class="btn btn-round bg-success text-white btn-lg w-100 mt-4 mb-0">CONCLUIR</button>

              </div>
              </form>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>