<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Document</title>
</head>
<body>
   <div class="error-container">
    <h1 class="error-title"><strong>Ups!</strong></h1>
    <p class="error-message">
        Esta página não existe, mas o <strong>Darth Vader</strong> acredita em ti
    </p>
    
    <img src="https://media1.giphy.com/media/v1.Y2lkPTc5MGI3NjExN2t0bmJwNGcydGprZ3B4cHBxenliYndhZTllMndpZ3E2cmk2Y2liayZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/A2NuEoQuB6uApzpnMd/giphy.gif" 
         alt="Erro 404" 
         class="error-gif">
    
    <div class="divider-section">
        <hr>
        <hr>
    </div>

    <a href="{{ route('home') }}" class="btn-back">
        Voltar ao Início
    </a>
</div>
</body>
</html>