<footer class="footer pt-3  ">
    <div class="container-fluid">
        <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
                <div class="copyright text-center text-sm text-muted text-lg-start">
                    ©
                    <i class="fa fa-heart"></i>
                    <a href="https://www.webmonkey.com.br" class="font-weight-bold" target="_blank">Web Monkey</a>

                </div>
            </div>
            <div class="col-lg-6">
                <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                    <li class="nav-item">
                        <a href="https://www.webmonkey.com.br" class="nav-link text-muted" target="_blank">Início</a>
                    </li>
                    <li class="nav-item">
                        <a href="https://www.webmonkey.com.br" class="nav-link text-muted" target="_blank">Sobre
                            Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="https://www.webmonkey.com.br/" class="nav-link text-muted" target="_blank">Serviços</a>
                    </li>
                    <li class="nav-item">
                        <a href="https://www.webmonkey.com.br" class="nav-link pe-0 text-muted"
                            target="_blank">Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
</div>
</main>
<div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
        <i class="fa fa-cog py-2"> </i>
    </a>
    <div class="card shadow-lg">
        <div class="card-header pb-0 pt-3 ">
            <div class="float-start">
                <h5 class="mt-3 mb-0">Argon Configurator</h5>
                <p>See our dashboard options.</p>
            </div>
            <div class="float-end mt-4">
                <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
                    <i class="fa fa-close"></i>
                </button>
            </div>
            <!-- End Toggle Button -->
        </div>
        <hr class="horizontal dark my-1">
        <div class="card-body pt-sm-3 pt-0 overflow-auto">
            <!-- Sidebar Backgrounds -->
            <div>
                <h6 class="mb-0">Sidebar Colors</h6>
            </div>
            <a href="javascript:void(0)" class="switch-trigger background-color">
                <div class="badge-colors my-2 text-start">
                    <span class="badge filter bg-gradient-primary active" data-color="primary"
                        onclick="sidebarColor(this)"></span>
                    <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
                    <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
                    <span class="badge filter bg-gradient-success" data-color="success"
                        onclick="sidebarColor(this)"></span>
                    <span class="badge filter bg-gradient-warning" data-color="warning"
                        onclick="sidebarColor(this)"></span>
                    <span class="badge filter bg-gradient-danger" data-color="danger"
                        onclick="sidebarColor(this)"></span>
                </div>
            </a>
            <!-- Sidenav Type -->
            <div class="mt-3">
                <h6 class="mb-0">Sidenav Type</h6>
                <p class="text-sm">Choose between 2 different sidenav types.</p>
            </div>
            <div class="d-flex">
                <button class="btn bg-gradient-primary w-100 px-3 mb-2 active me-2" data-class="bg-white"
                    onclick="sidebarType(this)">White</button>
                <button class="btn bg-gradient-primary w-100 px-3 mb-2" data-class="bg-default"
                    onclick="sidebarType(this)">Dark</button>
            </div>
            <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
            <!-- Navbar Fixed -->
            <div class="d-flex my-3">
                <h6 class="mb-0">Navbar Fixed</h6>
                <div class="form-check form-switch ps-0 ms-auto my-auto">
                    <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed"
                        onclick="navbarFixed(this)">
                </div>
            </div>
            <hr class="horizontal dark my-sm-4">
            <div class="mt-2 mb-5 d-flex">
                <h6 class="mb-0">Light / Dark</h6>
                <div class="form-check form-switch ps-0 ms-auto my-auto">
                    <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version"
                        onclick="darkMode(this)">
                </div>
            </div>
            <a class="btn bg-gradient-dark w-100" href="https://www.creative-tim.com/product/argon-dashboard">Free
                Download</a>
            <a class="btn btn-outline-dark w-100"
                href="https://www.creative-tim.com/learning-lab/bootstrap/license/argon-dashboard">View
                documentation</a>
            <div class="w-100 text-center">
                <a class="github-button" href="https://github.com/creativetimofficial/argon-dashboard"
                    data-icon="octicon-star" data-size="large" data-show-count="true"
                    aria-label="Star creativetimofficial/argon-dashboard on GitHub">Star</a>
                <h6 class="mt-3">Thank you for sharing!</h6>
                <a href="https://twitter.com/intent/tweet?text=Check%20Argon%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fargon-dashboard"
                    class="btn btn-dark mb-0 me-2" target="_blank">
                    <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
                </a>
                <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/argon-dashboard"
                    class="btn btn-dark mb-0 me-2" target="_blank">
                    <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
                </a>
            </div>
        </div>
    </div>
</div>
<!--   Core JS Files   -->
<script src="{{ asset('/pdv/js/core/popper.min.js') }}"></script>
<script src="{{ asset('/pdv/js/core/bootstrap.min.js') }}"></script>
<script src="{{ asset('/pdv/js/plugins/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('/pdv/js/plugins/smooth-scrollbar.min.js') }}"></script>
<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
</script>
<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->

<script src="{{ asset('/pdv/upload/js/script.js') }}"></script>


<script>
    // Inicialize o CountUp
    var options = {
        startVal: 0, // Valor inicial
        decimalPlaces: 0, // Casas decimais
        duration: 2, // Duração da animação em segundos
        useEasing: true, // Usar animação de easing
        useGrouping: true, // Usar agrupamento de milhares
        separator: ",", // Separador de milhares
        decimal: ".", // Separador decimal
        prefix: "", // Prefixo
        suffix: "" // Sufixo
    };

    var countUp = new CountUp('state1', document.getElementById('state1').getAttribute('countTo'), options);

    // Inicie o contador
    countUp.start();
</script>


<script src="{{ asset('/pdv/js/argon-dashboard.min.js?v=2.0.4') }}"></script>
<script src="{{ asset('/pdv/js/plugins/datatables.js') }}"></script>
<script>
    const dataTableSearch = new simpleDatatables.DataTable("#datatable-search", {
        searchable: true,
        fixedHeight: false,
        perPageSelect: false
    });

    document.querySelectorAll(".export").forEach(function(el) {
        el.addEventListener("click", function(e) {
            var type = el.dataset.type;

            var data = {
                type: type,
                filename: "soft-ui-" + type,
            };

            if (type === "csv") {
                data.columnDelimiter = "|";
            }

            dataTableSearch.export(data);
        });
    });
</script>


<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    $(document).ready(function() {
        $('#termo').on('input', function() {
            var termo = $(this).val();
            if (termo.length >= 2) {
                buscarProduto(termo);
            } else {
                $('#resultado').empty();
            }
        });

        $(document).on('click', '.adicionar', function() {
            var produtoId = $(this).data('id');
            var produtoNome = $(this).data('nome_produto'); // Corrigido para 'nome_produto'
            var produtoPreco = $(this).data('preco_venda');
            var produtoCodigo = $(this).data('Codigo_barra');
            var produtoImage = $(this).data('image');

            var produto = {
                id: produtoId,
                nome: produtoNome,
                preco: produtoPreco,
                image: produtoImage,
                codigo_barra: produtoCodigo,

            };

            adicionarAoCarrinho(produto);
        });

        function buscarProduto(termo) {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: '/buscar',
                type: 'GET',
                data: {
                    termo: termo
                },
                success: function(produtos) {
                    //       console.log(produtos); // Verifique os dados recebidos
                    $('#resultado').empty();
                    produtos.forEach(function(produto) {
                        var resultadoHtml = '';
                        resultadoHtml += '<div class="row mt-2">';
                        resultadoHtml += '<div class="col-lg-12 col-md-6 mb-4 mb-lg-0">';
                        resultadoHtml += '<div class="card h-100 ">';
                        resultadoHtml += '<div class="card-header">';
                        resultadoHtml +=
                            '<h5 class="mb-0 text-capitalize">Produtos encontrado:</h5>';
                        resultadoHtml += '<hr>';
                        resultadoHtml += '</div>';
                        resultadoHtml += '<div class="card-body pt-0">';
                        resultadoHtml += '<ul class="list-group list-group-flush">';
                        resultadoHtml += '<li class="list-group-item px-0">';
                        resultadoHtml += '<div class="row align-items-center">';
                        resultadoHtml += '<div class="col-auto d-flex align-items-center">';
                        resultadoHtml +=
                            '<img class="border-radius-lg" width="100px" alt="Image placeholder" src="{{ asset('images/produtos/') }}/' +
                            produto.image + '"">';
                        resultadoHtml += '</div>';
                        resultadoHtml += '<div class="col ml-2">';
                        resultadoHtml += '<h6 class="mb-0">';
                        resultadoHtml += '<a href="javascript:;">' + produto.Nome_Produto +
                            '</a>';
                        resultadoHtml += '</h6>';
                        resultadoHtml += '<span class="text-xs">Código: ' + produto
                            .Codigo_barra + ' </span>';
                        resultadoHtml += '<p>';
                        resultadoHtml += '<span class="badge bg-gradient-success"> ' +
                            produto.Preco_Venda + '</span>';
                        resultadoHtml += '</p>';
                        resultadoHtml += '</div>';
                        resultadoHtml += '<div class="col-auto">';
                        resultadoHtml +=
                            '<button type="button" class="btn btn-outline-success btn-xs mb-0 adicionar"  data-id="' +
                            produto.id + '" data-nome_produto="' + produto.Nome_Produto +
                            '" data-preco_venda="' + produto.Preco_Venda +
                            '" data-image= "' + produto.image + '" data-Codigo_barra= "' +
                            produto.Codigo_barra + '">Adicionar</button>';
                        resultadoHtml += '</div>';
                        resultadoHtml += '</div>';
                        resultadoHtml += '</li>';
                        resultadoHtml += '</ul>';
                        resultadoHtml += '</div>';
                        resultadoHtml += '</div>';
                        resultadoHtml += '</div>';





                        $('#resultado').append(resultadoHtml);
                    });
                },
                error: function(xhr, status, error) {
                    console.error('Erro ao buscar produtos:', error);
                }
            });
        }

        function adicionarAoCarrinho(produto) {
            //   console.log(produto); // Verifique o objeto produto recebido

            // Iniciando    
            var produtosSelecionados = $('#produtosSelecionados').val();
            var produtoJson = JSON.stringify(produto);
            if (produtosSelecionados) {
                produtosSelecionados += ',' + produtoJson;
            } else {
                produtosSelecionados = produtoJson;
            }


            $('#produtosSelecionados').val(produtosSelecionados);


            var carrinhoHtml = '';
            carrinhoHtml += '<div class="row mt-2">';
            carrinhoHtml += '<div class="col-sm-10">';
            carrinhoHtml += '<div class="card h-100">';
            carrinhoHtml += '<div class="card-header pb-0 p-3">';
            carrinhoHtml += '<div class="row">';
            carrinhoHtml += '<div class="col-md-6">';
            carrinhoHtml += '<h6 class="mb-0">Itens adicionado:</h6>';
            carrinhoHtml += '</div>';
            carrinhoHtml += '<div class="col-md-6 d-flex justify-content-end align-items-center">';
            carrinhoHtml += '<i class="far fa-calendar-alt me-2"></i>';
            carrinhoHtml += '<small>23 - 30 March 2021</small>';
            carrinhoHtml += '</div>';
            carrinhoHtml += '</div>';
            carrinhoHtml += '</div>';
            carrinhoHtml += '<div class="card-body p-3">';
            carrinhoHtml += '<ul class="list-group">';
            carrinhoHtml += '<li class="list-group-item justify-content-between ps-0 pb-0 ">';
            carrinhoHtml += '<div class="d-flex">';
            carrinhoHtml += '<div class="d-flex align-items-center">';
            carrinhoHtml += '<span class="p-2 d-flex align-items-center justify-content-center">';
            carrinhoHtml += '<img  src="{{ asset('images/produtos/') }}/' + produto.image + '" width="50px"/>';
            carrinhoHtml += '</span>';
            carrinhoHtml += '<div class="d-flex flex-column">';
            carrinhoHtml += '<h6 class="mb-1 text-dark text-sm">  ' + produto.nome + '</h6>';
            carrinhoHtml += '<span class="text-xs">Quantidade</span>';
            carrinhoHtml +=
                '<input type="number" min="1" value="1" class="form-control form-control-sm quantidade" style="width: 60px; display: inline-block;">';

            carrinhoHtml += '</div>';
            carrinhoHtml += '</div>';

            carrinhoHtml +=
                '<div class="d-flex align-items-center text-success text-gradient text-sm font-weight-bold ms-auto preco"> + R$ ' +
                produto.preco + '';
            carrinhoHtml +=
                '<button class="btn btn-link text-danger text-gradient px-3 mb-0 remover" data-id="' + produto
                .id + '"><i class="far fa-trash-alt fa-2x me-2" aria-hidden="true"></i></button>';
            carrinhoHtml += '</div>';
            carrinhoHtml += '</div>';
            carrinhoHtml += '<hr class="horizontal dark mt-3 mb-2" />';
            carrinhoHtml += '</li>';
            carrinhoHtml += '</ul>';
            carrinhoHtml += '</div>';
            carrinhoHtml += '</div>';
            carrinhoHtml += '</div>';
            carrinhoHtml += '</div>';

            $('#carrinho').append(carrinhoHtml);

            $('#carrinho li').last().find('.quantidade').on('input', function() {
                atualizarTotal();
            });
            atualizarTotal();
        }



        // Função para remover produto do carrinho
        $('#carrinho').on('click', '.remover', function() {
            $(this).closest('li').remove(); // Remove a linha <tr> mais próxima
            atualizarTotal();
        });


        // Função para atualizar total do carrinho
        function atualizarTotal() {
            var total = 0;
            $('#carrinho li').each(function() {
                var preco = parseFloat($(this).find('.preco').text().replace('+ R$ ', '').trim());
                var quantidade = parseInt($(this).find('.quantidade').val());
                total += preco * quantidade;
            });
            $('#total').html('<p>Total: R$ ' + total.toFixed(2) + '</p>');
        }
        
        
        $('#finalizarCompra').click(function(produto) {
            var preco = parseFloat($(this).find('.preco').text().replace('+ R$ ', '').trim());

            var nomeCliente = $('#Nome_Cliente')
        .val(); // Recuperar o nome do cliente do campo de entrada
            
        var total = parseFloat($('#total').text().replace('Total: R$ ', ''));
        
        

            // Abre a modal para selecionar o tipo de pagamento
            $('#modalPagamento').modal('show');
            // Preenche os campos do formulário de pagamento com as informações recuperadas
            $('#nomeCliente').val(nomeCliente);
            // Atualize aqui com os campos adicionais, se houver



        });

        $('#carrinho li').each(function() {
            var produtoId = $(this).find('.adicionar').data('id');
            var quantidade = $(this).find('.quantidade').val();
            produtos.push(produtoId);
            quantidades.push(quantidade);
        });

        //////////////////////////////////////////////////////////////////////////////

        // Função para lidar com o envio do formulário de pagamento
        $('#formPagamento').submit(function(event) {
            event.preventDefault(); // Impede o envio padrão do formulário
            // Obter os dados do formulário
            var formData = $(this).serialize();
            var quantidades = $('#quantidades').val();
            var produtos = $('#produtos').val();
            // Adicionar os valores dos campos hidden aos dados do formulário
            formData += '&quantidades=' + quantidades + '&produtos=' + produtos;

            // Realizar a requisição AJAX para a rota de vendas
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: '/venda-finalizar',
                method: 'POST',
                data: formData, // Envie os dados do formulário

                success: function(response) {
                    // Sucesso - fazer algo, como redirecionar para uma página de confirmação
                    window.location.href = '/vendas';
                },
                error: function(xhr, status, error) {
                    // Tratar erro
                    console.error('ERRO AO ENVIAR-->>:', error);
                }
            });
            // console.log(formData);
        });

    });
</script>
<script>
    $(document).ready(function() {
        $('#termoAluno').on('input', function() {
            var termoAluno = $(this).val();
            if (termoAluno.length >= 3) {
                buscarAlunos(termoAluno);
            } else {
                $('#resultado').empty();
            }
        });

        $(document).on('click', '.adicionar-aluno', function() {
            var alunoId = $(this).data('id');
            var alunoNome = $(this).data('Nome_Completo');
            var alunoImage = $(this).data('image');

            var aluno = {
                id: alunoId,
                nome: alunoNome,
                image: alunoImage,
            };

            adicionarAoCarrinhoAluno(aluno);
        });

        function buscarAlunos(termoAluno) {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: '/buscar-alunos',
                type: 'GET',
                data: {
                    termoAluno: termoAluno
                },
                success: function(alunos) {
                    $('#resultado').empty();
                    alunos.forEach(function(aluno) {
                        var resultadoHtml = '';
                        resultadoHtml += '<div class="row mt-2">';
                        resultadoHtml += '<div class="col-lg-12 col-md-6 mb-4 mb-lg-0">';
                        resultadoHtml += '<div class="card h-100 ">';
                        resultadoHtml += '<div class="card-header">';
                        resultadoHtml += '<h5 class="mb-0 text-capitalize">Alunos encontrado:</h5>';
                        resultadoHtml += '<hr>';
                        resultadoHtml += '</div>';
                        resultadoHtml += '<div class="card-body pt-0">';
                        resultadoHtml += '<ul class="list-group list-group-flush">';
                        resultadoHtml += '<li class="list-group-item px-0">';
                        resultadoHtml += '<div class="row align-items-center">';
                        resultadoHtml += '<div class="col-auto d-flex align-items-center">';
                        resultadoHtml += '<img class="border-radius-lg" width="100px" alt="Image placeholder" src="{{ asset('images/usuarios/') }}/' +
                            aluno.image + '"">';
                        resultadoHtml += '</div>';
                        resultadoHtml += '<div class="col ml-2">';
                        resultadoHtml += '<h6 class="mb-0">';
                        resultadoHtml += '<a href="javascript:;">' + aluno.Nome_Completo +
                            '</a>';
                        resultadoHtml += '</h6>';
                        resultadoHtml += '<p>';
                        resultadoHtml += '</p>';
                        resultadoHtml += '</div>';
                        resultadoHtml += '<div class="col-auto">';
                        resultadoHtml +=
                            '<button type="button" class="btn btn-outline-success btn-xs mb-0 adicionar-aluno"  data-id="' +
                            aluno.id + '" data-nome_completo="' + aluno.Nome_Completo +
                            '" data-image= "' + aluno.image + '">Adicionar</button>';
                        resultadoHtml += '</div>';
                        resultadoHtml += '</div>';
                        resultadoHtml += '</li>';
                        resultadoHtml += '</ul>';
                        resultadoHtml += '</div>';
                        resultadoHtml += '</div>';
                        resultadoHtml += '</div>';
                        resultadoHtml += '</div>';

                        $('#resultado').append(resultadoHtml);
                    });
                },
                error: function(xhr, status, error) {
                    console.error('Erro ao buscar alunos:', error);
                }
            });
        }

        function adicionarAoCarrinhoAluno(aluno) {
            var alunoJson = JSON.stringify(aluno);
            console.log(alunoJson);
            // Aqui você pode adicionar o aluno ao carrinho como desejar
            $('#alunoId').val(aluno.id);
            

        }
    });
</script>



</body>

</html>
