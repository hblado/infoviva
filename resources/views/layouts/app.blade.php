<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>@yield('title') - Plataforma RAM</title>
    <link rel="stylesheet" href="/assets/style.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    @include('components.Navbar.navbar')

    {{-- Conteúdo dinâmico --}}
    <main style="padding: 1rem;">
        @yield('content')
    </main>

    {{-- Rodapé --}}
    <footer>
        <p>Projeto RAM – UFBA © {{ date('Y') }}</p>
        <p>contatoinfoviva@gmail.com</p>
    </footer>

</body>
</html>
