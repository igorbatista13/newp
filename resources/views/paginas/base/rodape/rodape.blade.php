<footer class="footer pt-3  ">
    <div class="container-fluid">
        <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
                <div class="copyright text-center text-sm text-muted text-lg-start">
                    ©
                    <script>
                        document.write(new Date().getFullYear())
                    </script>
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
            if (termo.length > 0) {
                buscarProduto(termo);
            } else {
                $('#resultado').empty();
            }
        });

        $(document).on('click', '.adicionar', function() {
            var produtoId = $(this).data('id');
            var produtoNome = $(this).data('Nome_Produto');
            var produtoPreco = $(this).data('Preco_Venda');
            var produto = {
                id: produtoId,
                nome: produtoNome,
                preco: produtoPreco
            };

            adicionarAoCarrinho(produto);
        });

        function buscarProduto(termo) {
            $.ajax({
                url: '/buscar',
                type: 'GET',
                data: { termo: termo },
                success: function(produtos) {
                    $('#resultado').empty();
                    produtos.forEach(function(produto) {
                        var resultadoHtml = '<li class="list-group-item d-flex justify-content-between align-items-center">';
                            resultadoHtml += '<div class="row mt-3">';
                                resultadoHtml += '<div class="col-4">';
                                    resultadoHtml += '<img class="w-100 border-radius-lg shadow-lg" src="{{ asset('images/produtos/') }}/' + produto.image + '" alt="product_image">';
                                    resultadoHtml += '</div>';
                                    resultadoHtml += '<div class="col-8">';
                                        resultadoHtml += '<p><b>Produto:</b> ' + produto.Nome_Produto +  '</p>';
                                        resultadoHtml += '<p><b>Código de Barras:</b> ' + produto.Codigo_barra + '</p>';
                                        resultadoHtml += '<p><b>Preço:</b> R$ ' + produto.Preco_Venda + '</p>';
                                        resultadoHtml += '<button class="btn btn-primary btn-sm adicionar" data-id="' + produto.id + '">Adicionar</button>';

                                        resultadoHtml += '</div>';
                                        resultadoHtml += '</div>';
                                        resultadoHtml += '</li>';
                                        $('#resultado').append(resultadoHtml);
                    });
                },
                error: function(xhr, status, error) {
                    console.error('Erro ao buscar produtos:', error);
                }

            });
            adicionarAoCarrinho(produto);

        }
        function adicionarAoCarrinho(produto) {
            var produtoNome = produto.nome;
            var produtoPreco = produto.preco;
            var carrinhoHtml = $('#carrinho').html();
            carrinhoHtml += '<div class="container-fluid py-4">';
            carrinhoHtml += '<div class="card mb-4">';
            carrinhoHtml += '<div class="card-body px-0 pt-0 pb-2">';
            carrinhoHtml += '<div class="table-responsive p-0">';
            carrinhoHtml += '<table class="table align-items-center mb-0">';
            carrinhoHtml += '<thead>';
            carrinhoHtml += '<tr>';
            carrinhoHtml += '<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ITENS</th>';
            carrinhoHtml += '<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Quantidade</th>';
            carrinhoHtml += '<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Preço</th>';
            carrinhoHtml += '<th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Ação</th>';
            carrinhoHtml += '</tr>';
            carrinhoHtml += '</thead>';
            carrinhoHtml += '<tbody>';
            carrinhoHtml += ' <tr>';
            carrinhoHtml += '<td> ';
            carrinhoHtml += '<div class="d-flex px-2 py-1">';
            carrinhoHtml += '<div><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSYQhFy_94bv6cGo0Qxxd1yKfoZSOr88yuRGJPrgFeang&s"class="avatar avatar-sm me-3" alt="user1"></div>';
            carrinhoHtml += '<div class="d-flex flex-column justify-content-center"><h6 class="mb-0 text-sm">'+ produto.Nome_Produto + '</h6><p class="text-xs text-secondary mb-0">' 
                ' </p></div>';
            carrinhoHtml += '</div>';
            carrinhoHtml += '</td>';
            carrinhoHtml += '<td><input type="number" min="1" value="1" class="form-control form-control-sm quantidade" style="width: 70px; display: inline-block;"></td>';
            carrinhoHtml += '<td><span class="badge bg-gradient-success">R$ ' + produto.preco + '</span></td>';
            carrinhoHtml += '<td class="align-middle text-center"><button type="button" class="btn btn-link text-danger text-gradient px-3 mb-0"data-bs-toggle="modal" data-bs-target="#EDITAR"><iclass="far fa-trash-alt fa-2x me-2" aria-hidden="true"></i></button><div class="modal fade" id="EDITAR" tabindex="-1" role="dialog"aria-labelledby="EDITAR" aria-hidden="true"><div class="modal-dialog modal-danger modal-dialog-centered modal-lg"role="document"><div class="modal-content"><div class="modal-body"><div class="py-3 text-center"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSYQhFy_94bv6cGo0Qxxd1yKfoZSOr88yuRGJPrgFeang&s"class="avatar avatar-xxl  me-3"><h4 class="text-gradient text-danger mt-4">Deseja excluir esteproduto?</h4></div><div class="card-body"><div class="text-center"><button type="button"class="btn btn-round bg-gradient-danger btn-lg w-100 mt-4 mb-0">Excluir</button></div></form></div></div></div></div></div></td>';
            carrinhoHtml += '<div class="mb-2">';
            carrinhoHtml += '<span class="nome">' + produto.nome + '</span>';
            carrinhoHtml += '<span class="preco"> ' + produto.preco + '</span>';
            carrinhoHtml += '<button class="btn btn-danger btn-sm remover" data-id="' + produto.id +
                '">Remover</button>';
            carrinhoHtml += '<input type="number" min="1" value="1" class="form-control form-control-sm quantidade" style="width: 70px; display: inline-block;">';
            carrinhoHtml += '</div>';

            $('#carrinho').html(carrinhoHtml);

            atualizarTotal();
        }


        // Função para remover produto do carrinho
        $('#carrinho').on('click', '.remover', 'container-fluid py-4', function() {
            $(this).parent().remove();
            atualizarTotal();
        });

        // Função para atualizar total do carrinho
        function atualizarTotal() {
            var total = 0;
            $('.mb-2').each(function() {
                var preco = parseFloat($(this).find('produto.preco').text().replace('R$ ', ''));
                var quantidade = parseInt($(this).find('produto.quantidade').val());
                total += preco * quantidade;
            });
            $('#total').html('<p>Total: R$ ' + total.toFixed(2) + '</p>');
        }

        // Função para finalizar compra
        $('#finalizarCompra').click(function() {
            alert('Compra finalizada!');
        });
    });
</script>
</body>

</html>
