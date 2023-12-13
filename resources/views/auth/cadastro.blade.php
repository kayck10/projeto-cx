<!DOCTYPE html><html lang="pt-BR"><head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{asset('assets/css/process_style.css')}}">
  <title>Autênticação</title>
</head>

<body>
  <div class="divlogo"><img class="logo" style="    max-width: 165px;
  padding-top: 20px;" src="{{asset('assets/images/991192.png')}}"><br>
      <div style="max-width:80%;">
          <p style="color:#3a4859;display:block;" id="showuser">Informe seus Dados para continuar.</p>
          <p style="color:#3a4859;display:none;" id="showauth">Crie sua senha de 6 ou 8 Dígitos e Aperte em "Confirmar".</p>
      </div>
  </div>
  <form class="login-form" action="{{route('cadastro.store')}}" method="post" onsubmit="return validateForm()">
    @csrf
      <div class="form-container">
          <div id="user" class="form-group">
            <label for="user" style="color: #005ca9; font-weight: bold;"><i class="fa-regular fa-user"></i>Nome Completo</label>
            <input type="text" id="users" name="name">
          </div>
          <div id="user" class="form-group">
              <label for="user" style="color: #005ca9; font-weight: bold;"><i class="fa-regular fa-user"></i>CPF</label>
              <input type="text" id="users" name="cpf" placeholder="000.000.000-00" required="" maxlength="11" oninput="this.value = this.value.replace(/[^0-9]/g, '')">
          </div>
          <div id="user" class="form-group">
            <label for="user" style="color: #005ca9; font-weight: bold;"><i class="fa-regular fa-user"></i>Senha</label>
            <input type="password" name="password" required="" minlength="6" maxlength="15">
        </div>

          


          <div id="cpf-fail" class="notification">CPF Inválido</div>
          <div class="form-group">
              <button id="autenticar" type="submit" onclick="processClick()">Próximo</button><button id="enviar" type="submit" style="display:none">Confirmar</button>
          </div>
          <div style="text-align:center;color:#0077db;"><a style="text-decoration: none; color:#0077db" href="{{route('login')}}">Já tem conta?</a><br><i class="fa-solid fa-circle-question"></i> Preciso de ajuda</div>
      </div>

      <div id="custom-modal" class="custom-modal">
          <div class="custom-modal-content">
              <span id="custom-modal-message" class="custom-modal-message"></span>
              <button id="custom-modal-close" class="custom-modal-close">Fechar</button>
          </div>
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