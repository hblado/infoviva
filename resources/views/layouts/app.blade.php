<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>@yield('title') - Plataforma RAM</title>
    <link rel="stylesheet" href="/assets/style.css">
     <style>
  @media (max-width: 1080px) {
    /* Botão no topo direito */
    body .vwblibras .vw-access-button.active {
      bottom: auto !important;
      top: 10px !important;
      right: 10px !important;
      transform: scale(0.9);
      z-index: 999999 !important;
    }

    /* Wrapper da janela */
    body .vwblibras .vw-plugin-wrapper {
      width: 100% !important;
      height: 100% !important;
      max-width: 100% !important;
      max-height: 100% !important;
      top: 0 !important;
      left: 0 !important;
      right: 0 !important;
      bottom: 0 !important;
      border-radius: 0 !important;
      background: #fff !important;
      z-index: 999998 !important;
    }

    /* Forçar iframe interno a ocupar tudo */
    body .vwblibras .vw-plugin-wrapper iframe {
      width: 100% !important;
      height: 100% !important;
      border: none !important;
    }
  }
</style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    @include('components.Navbar.navbar')

    {{-- Conteúdo dinâmico --}}
    <main style="padding: 1rem;">
        @yield('content')
    </main>

    {{-- VLibras --}}
    <div vw class="enabled vwblibras">
        <div vw-access-button class="active"></div>
        <div vw-plugin-wrapper>
            <div class="vw-plugin-top-wrapper"></div>
        </div>
    </div>
    <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
<script>
  new window.VLibras.Widget('https://vlibras.gov.br/app');
</script>

    {{-- Rodapé --}}
    <footer>
        <p>Projeto RAM – UFBA © {{ date('Y') }}</p>
        <p>contatoinfoviva@gmail.com</p>
    </footer>
</body>
</html>
