@include('paginas.base.topo.topo')


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
                                            

                                                                    @if ($empresa == false)
                                                                        <a class="btn btn-warning"
                                                                            href="minhaempresa/create">Configurar minha
                                                                            empresa</a>
                                                                    @endif

                                                                    @foreach ($minhaempresa as $minhaempresas)
                                                                        <h5 class="card-title"><strong> Nome da Empresa:
                                                                            </strong>
                                                                            {{ $minhaempresas->Nome_Empresa ?? 'Não informado' }}
                                                                        </h5>
                                                                        <ul class="list-group list-group-flush">
                                                                            <li class="list-group-item"><strong> CNPJ:
                                                                                </strong>
                                                                                {{ $minhaempresas->Cnpj ?? 'Não informado' }}
                                                                            </li>
                                                                            <li class="list-group-item"><strong> Chave
                                                                                    Pix: </strong>
                                                                                {{ $minhaempresas->Chave_Pix ?? 'Não informado' }}
                                                                            </li>
                                                                            <li class="list-group-item"><strong><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="16" height="16"
                                                                                        fill="currentColor"
                                                                                        class="bi bi-envelope"
                                                                                        viewBox="0 0 16 16">
                                                                                        <path
                                                                                            d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                                                                                    </svg> E-mail: </strong>
                                                                                {{ $minhaempresas->Email ?? 'Não informado' }}
                                                                            </li>
                                                                            <li class="list-group-item"><strong><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="16" height="16"
                                                                                        fill="currentColor"
                                                                                        class="bi bi-link-45deg"
                                                                                        viewBox="0 0 16 16">
                                                                                        <path
                                                                                            d="M4.715 6.542 3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1.002 1.002 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4.018 4.018 0 0 1-.128-1.287z" />
                                                                                        <path
                                                                                            d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 1 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 1 0-4.243-4.243L6.586 4.672z" />
                                                                                    </svg> SITE: </strong>
                                                                                {{ $minhaempresas->Site ?? 'Não informado' }}
                                                                            </li>
                                                                            <li class="list-group-item"><strong><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="16" height="16"
                                                                                        fill="currentColor"
                                                                                        class="bi bi-phone"
                                                                                        viewBox="0 0 16 16">
                                                                                        <path
                                                                                            d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z" />
                                                                                        <path
                                                                                            d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                                                                    </svg> Telefone:</strong>
                                                                                {{ $minhaempresas->Telefone ?? 'Não informado' }}
                                                                            </li>
                                                                            <li class="list-group-item"><strong><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="16" height="16"
                                                                                        fill="currentColor"
                                                                                        class="bi bi-facebook"
                                                                                        viewBox="0 0 16 16">
                                                                                        <path
                                                                                            d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                                                                                    </svg> Facebook:</strong>
                                                                                {{ $minhaempresas->facebook_url ?? 'Não informado' }}
                                                                            </li>
                                                                            <li class="list-group-item"><strong><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="16" height="16"
                                                                                        fill="currentColor"
                                                                                        class="bi bi-instagram"
                                                                                        viewBox="0 0 16 16">
                                                                                        <path
                                                                                            d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                                                                                    </svg> Instagram:</strong>
                                                                                {{ $minhaempresas->instagram_url ?? 'Não informado' }}
                                                                            </li>
                                                                            <li class="list-group-item"><strong><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="16" height="16"
                                                                                        fill="currentColor"
                                                                                        class="bi bi-linkedin"
                                                                                        viewBox="0 0 16 16">
                                                                                        <path
                                                                                            d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                                                                                    </svg> Linkedin: </strong>
                                                                                {{ $minhaempresas->linkedin_url ?? 'Não informado' }}
                                                                            </li>
                                                                        </ul>


                                                                        <a class="btn btn-warning"
                                                                            href="{{ route('minhaempresa.edit', $minhaempresas->id) }}">Editar</a>

                                                                </div>
                                                            </div>


                                                        </center>
                                                        @endforeach



                                                        @include('paginas.base.rodape.rodape')
