
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


        $('#finalizarCompra').click(function() {
            //  var preco = parseFloat($(this).find('.preco').text().replace('+ R$ ', '').trim());

            // Abre a modal para selecionar o tipo de pagamento
            $('#modalPagamento').modal('show');

            // Preenche os campos do formulário de pagamento com as informações recuperadas
            var nomeCliente = $('#Nome_Cliente')
        .val(); // Recuperar o nome do cliente do campo de entrada
            // Atualize aqui com os campos adicionais, se houver

            // Atualize os campos do formulário
            $('#Nome_Cliente').val(nomeCliente);
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
            var produtosSelecionados = $('#produtosSelecionados')
                .val(); // Recuperar os produtos selecionados

            // Adicionar os valores dos campos hidden aos dados do formulário
            formData += '&produtosSelecionados=' + produtosSelecionados;

            // Realizar a requisição AJAX para a rota de vendas
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: '/vendas/store',
                method: 'POST',
                data: formData, // Envie os dados do formulário

                success: function(response) {
                    // Sucesso - fazer algo, como redirecionar para uma página de confirmação
                    console.log('Venda realizada com sucesso:', response);
                    window.location.href =
                        '/vendas'; // Redirecionar para a página de vendas
                },
                error: function(xhr, status, error) {
                    // Tratar erro
                    console.error('Erro ao enviar formulário de pagamento:', error);
                }
            });
        });

    });
</script>
