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


@include ('/paginas/base/rodape/lateral')
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
                        resultadoHtml +=
                            '<h5 class="mb-0 text-capitalize">Alunos encontrado:</h5>';
                        resultadoHtml += '<hr>';
                        resultadoHtml += '</div>';
                        resultadoHtml += '<div class="card-body pt-0">';
                        resultadoHtml += '<ul class="list-group list-group-flush">';
                        resultadoHtml += '<li class="list-group-item px-0">';
                        resultadoHtml += '<div class="row align-items-center">';
                        resultadoHtml += '<div class="col-auto d-flex align-items-center">';
                        resultadoHtml +=
                            '<img class="border-radius-lg" width="100px" alt="Image placeholder" src="{{ asset('images/usuarios/') }}/' +
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
