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
                codigo_barra: produtoCodigo
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
                        resultadoHtml += '<div class="col-md-12 mt-2">';
                        resultadoHtml += '<div class="card-body pt-6 p-3">';
                        resultadoHtml += '<ul class="list-group">';
                        resultadoHtml += '<li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">';
                        resultadoHtml += '<div class="d-flex flex-column">';
                        resultadoHtml +=
                            '<img class="w-100 border-radius-lg shadow-lg" src="{{ asset('images/produtos/') }}/' +
                            produto.image + '" alt="product_image">';
                        resultadoHtml += '<h6 class="mb-3 text-sm">Produto: '+ produto.Nome_Produto +'</h6>';
                        resultadoHtml += '<span class="mb-2 text-xs">Código: <span class="text-dark font-weight-bold ms-sm-2">'+ produto.Codigo_barra +'</span></span>';
                            '<li class="list-group-item d-flex justify-content-between align-items-center">';
                        resultadoHtml += '<span class="mb-2 text-xs">Preço <span class="text-dark ms-sm-2 font-weight-bold">'+ produto.Preco_Venda + '</span></span>';                               
                        resultadoHtml += '<span class="text-xs">VAT Number: <span class="text-dark ms-sm-2 font-weight-bold">FRB1235476</span></span>';                               
                        resultadoHtml += '</div>';                               
                        resultadoHtml += '<div class="ms-auto text-end">';                               
                        resultadoHtml += '<button class="btn btn-primary btn-sm adicionar" data-id="' +
                            produto.id + '" data-nome_produto="' + produto.Nome_Produto +
                            '" data-preco_venda="' + produto.Preco_Venda +
                            '" data-image= "' + produto.image + '" data-Codigo_barra= "' + produto.Codigo_barra + '">Adicionar</button>';                               
                        resultadoHtml += '</div>';                               
                        resultadoHtml += '</li>';                               
                        resultadoHtml += '</ul>';                               
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

            var carrinhoHtml = '';
            carrinhoHtml += ' <tr>';
            carrinhoHtml += '<td>';
            carrinhoHtml += '<div class="d-flex px-2 py-1">';
            carrinhoHtml += '<img class="border-radius-lg" src="{{ asset('images/produtos/') }}/' +
                produto.image + '" alt="product_image" width="150px">';
            carrinhoHtml += '<br>';
            carrinhoHtml += ' <h5 class="mb-2 ">' +
                produto.nome + '<h5>';
            carrinhoHtml += ' </div>';
            carrinhoHtml += '</td>';

            carrinhoHtml += '<td>';
            carrinhoHtml +=
                '<input type="number" min="1" value="1" class="form-control form-control-sm quantidade" style="width: 50px; display: inline-block;">';
            carrinhoHtml += '</td>';

            carrinhoHtml += '<td class="preco">'; // Adicionando uma classe para o preço
            carrinhoHtml += '<span class="badge bg-gradient-success"> ' + produto.preco + '</span>';
            carrinhoHtml += '</td>';


            carrinhoHtml += '<td>';
            carrinhoHtml +=
                '<button class="btn btn-link text-danger text-gradient px-3 mb-0 remover" data-id="' + produto
                .id + '"><i class="far fa-trash-alt fa-2x me-2" aria-hidden="true"></i></button>';
            carrinhoHtml += '</td>'
            carrinhoHtml += '</tr>';

            $('#carrinho').append(carrinhoHtml);
            
            $('#carrinho tr').last().find('.quantidade').on('input', function() {
                atualizarTotal();
    });
        }

        // Função para remover produto do carrinho
        $('#carrinho').on('click', '.remover', function() {
            $(this).closest('tr').remove(); // Remove a linha <tr> mais próxima
            atualizarTotal();
        });

        // Função para atualizar total do carrinho
        function atualizarTotal() {
            var total = 0;
            $('#carrinho tr').each(function() {
                var preco = parseFloat($(this).find('.preco span').text().replace('R$', '').trim());
                var quantidade = parseInt($(this).closest('tr').find('.quantidade').val());
                total += preco * quantidade;
            });
            $('#total').html('<p>Total: R$ ' + total.toFixed(2) + '</p>');
        }
        $('#finalizarCompra').click(function() {
            alert('Compra finalizada!');
        });

    });
</script>
</body>

</html>