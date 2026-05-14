<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo ao Servidor</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts: Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="shortcut icon" href="{{asset('assets/img/favicon.jfif')}}" type="image/x-icon">
    
</head>
<body>

    <div class="welcome-card">
        <div class="status-badge">Servidor Online</div>
        
        <div class="app-logo" ><img src="" alt="">Ikind</div> 
        
        <h1> Welcome Boss </h1>
        <p>A tua aplicação Laravel está configurada e pronta a funcionar. O design está limpo, o código está organizado e o servidor está à tua espera.</p>
        
        <div class="d-grid gap-2">
            <a href="{{ route ('welcome_routename')}}" class="btn-start">Welcome</a>
            <a href="/testevar" class="btn-start">Verificar variáveis</a>
            <a href="{{ route ('users.add') }}" class="btn btn-start"> Adicionar Utilizador </a>
            <a href="/lol" class="btn btn-start">nao carregues</a>
     
    
    
    
    
</div>

</body>
</html>