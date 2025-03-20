<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">

    <title>@yield('title', 'Dashboard')</title>
</head>

<body>

    <header>
        <div class="sidebar">

            <img src="" alt="Logo da Empresa">

            <a href="#" class="link active" onclick="setActive(this)">Dashboard</a>
            <div class="accordion">
                <a href="#" class="link" onclick="toggleAccordion('notificacoes', this)">
                    Notificações
                    <span class="accordion-icon">&#9660;</span> <!-- Seta para baixo -->
                </a>
                <div class="accordion-content" id="notificacoes">
                    <a href="#">OPT</a>
                    <a href="#">OPT</a>
                    <a href="#">OPT</a>
                </div>
            </div>
            <div class="accordion">
                <a href="#" class="link" onclick="toggleAccordion('conta', this)">
                    Conta
                    <span class="accordion-icon">&#9660;</span> <!-- Seta para baixo -->
                </a>
                <div class="accordion-content" id="conta">
                    <a href="#">Configurações</a>
                    <a href="#">Perfil</a>
                    <a href="#">Sair</a>
                </div>
            </div>
            <a href="#" class="link" onclick="setActive(this)">Sobre</a>
        </div>


    </header>

    <main>

    </main>


    <footer class="footer">
        <div class="footer-content">
            <p>&copy; 2025 Fulano. Todos os direitos reservados.</p>
        </div>
    </footer>

    <script src="{{ asset('js/sidebard.js') }}"></script>

</body>

</html>
