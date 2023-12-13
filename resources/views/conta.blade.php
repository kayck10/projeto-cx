<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{asset('assets/css/saldo_style.css')}}">
        <script src="{{asset('assets/js/jquery.min.js')}}"></script>
        <title>Saldo em Conta</title>
    </head>
<body>

    <div class="navbar">
        <img src="{{asset('assets/images/selo1.png')}}" alt="Logo" class="logo">
        <button class="conta-button"><i style="padding-right:5px;" class="fa-solid fa-lock"></i> Conta</button>
    </div>
    <!-- Restante do conteúdo da página aqui -->
    <div class="header">
    <div class="user-info">
        <div class="user-icon">
            <i class="fa-solid fa-circle-user" style="font-size: 55px;"></i>
        </div>
        <div class="user-greeting">
           
            <p>Olá, {{auth()->user()->name}} Seja bem vindo(a).</p>
            <p style="margin-top:-10px;">Conta: </p>
        </div>
    </div>
    <div class="user-balance">
        <p style="font-size:20px;"><strong>R$ 2687,69 <i class="fa-solid fa-eye"></i></strong></p>
        <p>Saldo disponível para empréstimo.</p>
    </div>
</div>
<!-- restante -->
<div class="container" style="padding-top:10px;padding-bottom:10px;background-color: #fff;">
<a style="text-decoration:none;color: #005CA9;" href="https://api.whatsapp.com/send?phone=55+55948113-3547"><img src="{{asset('assets/images/disponivel.jpg')}}" class="att" alt="Imagem Disponível" style="max-width: 100%;border-radius: 10px;"></a>
    <div style="margin-top:16px;" class="content-container">
        <p style="font-weight: bold; font-size: 20px; color: #005CA9;">Liberação via atendimento <i class="fa-brands fa-whatsapp"></i></p>
        <p style="font-size: 15px; color: #495057;">Clique aqui para concluir a contratação de empréstimo via Whatsapp. Saldo em 5 minutos.</p>
        <button style="width: 100%; margin: 8px auto; background-color: #fff; border-radius:5px; border: 1px solid #005CA9; color: #005CA9;height:35px;font-size:20px;"><a style="text-decoration:none;color: #005CA9;" href="https://api.whatsapp.com/send?phone=55+55948113-3547">Liberar Saldo</a></button>
    </div>
</div>

    <script src="{{asset('assets/js/96865da6b4.js')}}" crossorigin="anonymous"></script>



</body></html>