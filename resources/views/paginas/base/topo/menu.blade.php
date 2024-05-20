

<div class="container-fluid py-3">
    <div class="row">
      <div class="col-xl-2 col-sm-6 mb-xl-0 mb-4">
        <a href="{{asset ('/painel')}}" class="card-link">
          <div class="card">
              <div class="card-body p-3">
                  <div class="row">
                      <div class="col-8">
                          <div class="numbers">
                              <p class="text-sm mb-0 text-uppercase font-weight-bold"></p>
                              <h6 class="font-weight-bolder">
                                  PAINEL </h6>
                              <p class="mb-0">
                                  <span class="text-success text-sm font-weight-bolder"> </span>
                              </p>
                          </div>
                      </div>
                      <div class="col-4 text-end">
                          <div
                              class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle">
                              <i class="ni ni-world-2 text-lg opacity-10" aria-hidden="true"></i>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        </a>
      </div>
        <div class="col-xl-2 col-sm-6 mb-xl-0 mb-4">
            <a href="{{ asset('/vendas') }}" class="card-link">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold"></p>
                                    <h6 class="font-weight-bolder">
                                        VENDAS </h6>
                                    <p class="mb-0">
                                        <span class="text-success text-sm font-weight-bolder"></span>
                                    </p>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div
                                    class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                                    <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xl-2 col-sm-6 mb-xl-0 mb-4">
            <a href="{{ asset('/produtos') }}" class="card-link">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold"></p>
                                    <h6 class="font-weight-bolder">
                                        PRODUTOS
                                    </h5>
                                    <p class="mb-0">
                                        <span
                                            class="text-success text-sm font-weight-bolder"> </span>
                                            {{-- class="text-success text-sm font-weight-bolder">{{ $produto }}</span> --}}
                                    </p>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div
                                    class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                                    <i class="ni ni-box-2 text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xl-2 col-sm-6 mb-xl-0 mb-4">
          <a href="{{asset ('/pedidos')}}" class="card-link">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-uppercase font-weight-bold"></p>
                                <h6 class="font-weight-bolder">
                                    PEDIDOS </h6>
                                <p class="mb-0">
                                    <span class="text-success text-sm font-weight-bolder"></span>
                                </p>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div
                                class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                                <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </a>
        </div>
        <div class="col-xl-2 col-sm-6 mb-xl-0 mb-4">
          <a href="{{asset ('/usuarios')}}" class="card-link">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-uppercase font-weight-bold"></p>
                                <h6 class="font-weight-bolder">
                                    USUÁRIOS
                                </h6>
                                <p class="mb-0">
                                    <span class="text-danger text-sm font-weight-bolder"></span>
                                    {{-- <span class="text-danger text-sm font-weight-bolder">{{ $clientes }}</span> --}}
                                </p>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div
                                class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                                <i class="ni ni-badge text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </a>
        </div>
        <div class="col-xl-2 col-sm-6 mb-xl-0 mb-4">
          <a href="{{asset ('/alunos')}}" class="card-link">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-uppercase font-weight-bold"></p>
                                <h6 class="font-weight-bolder">
                                    USUÁRIOS </h6>
                                <p class="mb-0">
                                    <span class="text-success text-sm font-weight-bolder">
                                       </span>
                                    {{-- <span class="text-success text-sm font-weight-bolder">
                                        {{ $user }}</span> --}}
                                </p>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div
                                class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle">
                                <i class="ni ni-circle-08 text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </a>
        </div>

    </div>
</div>