<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <title>login</title>
</head>

<body>
    <div class="container-form">
        <form action="" method="post">
            <div>
                <h2>Registrar</h2>
            </div>

            <div class="form-style">
                <label for="email">Nome</label>
                <input type="text" name="email" id="nome" placeholder="Digite o nome" required>
            </div>

            <div class="form-style">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Digite o email" required>
            </div>

            <div class="form-style">
                <label for="password">Senha</label>
                <input type="password" name="password" id="password" placeholder="Digite a sua senha" required>
            </div>

            <div class="form-style">
                <label for="password">Confirmar Senha</label>
                <input type="password" name="password" id="password" placeholder="Confirme a sua senha" required>
            </div>

            <div class="form-button">
                <button type="submit" name="login" id="login">Criar</button>
                <a href="#">Ja tem uma conta?</a>
            </div>

        </form>
    </div>
</body>

</html>
