<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    <link rel="stylesheet" href="{{asset('css/reset.css')}}">
    <title>login</title>
</head>
<body>
    <div class="container-form">
        <form action="" method="post">
            <div>
                <h2>Login</h2>
            </div>
            
            <div class="form-label">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Digite o email" required>
            </div>
            
            <div class="form-label">
                <label for="password">Senha</label>
                <input type="password" name="password" id="password" placeholder="Digite a sua senha" required>
            </div>

            <div class="form-button">
                <button type="submit" name="login" id="login">Entrar</button>
                <a href="#">Esqueceu sua senha?</a>
            </div>
            <div class="form-link">
               <a href="#" id="form-link">Criar Conta</a> 
            </div>
            
        </form>
    </div>
</body>
</html>