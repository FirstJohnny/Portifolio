<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Portfólio' }} | Cyber Security & Software Engineer</title>

    <!-- Meta Tags -->
    <meta name="description" content="Professional DevSecOps and Cybersecurity portfolio showcasing secure software development, network security, and cloud infrastructure expertise.">
    <meta name="keywords" content="DevSecOps, Cybersecurity, Software Engineer, Network Security, Cloud Security, Portfolio">
    <meta name="author" content="LoneWolf Portfolio">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts & Icons -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Roboto+Mono:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!--Favicons-->
    <link rel="shortcut icon" href="{{asset('favicon.png')}}">
    <link rel="apple-touch-icon" href="{{asset('favicon.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('favicon.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('favicon.png')}}">

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="css/style.css">
    {{ $head ?? '' }}
</head>
<body>
    <!-- Cyber Effects -->
    <x-ui.cyber-effect type="grid" />
    <x-ui.cyber-effect type="stream" />
    <x-ui.cyber-effect type="scan" />

    <!-- Loading Animation -->
    <div class="loader" id="loader">
        <div class="loader-content">
            <div style="display: flex; justify-content: center; align-items: center; margin-bottom: 2rem;">
                <img src="{{asset('favicon.png')}}" alt="LoneWolf Logo" style="width: 70px; margin-right: 1rem;">
                <h1 style="font-family: 'Roboto Mono', monospace; font-size: 2.2rem; color: #2563eb; margin: 0;">Lone<span style="color: var(--primary-color, #fbbf24);"> Wolf</span></h1>
            </div>
            <div class="loader-text">
                <span class="prompt">$</span> <span class="command">inicializando_protocolos_de_segurança</span>
                <div class="output">Sistema: Carregando portfólio seguro...</div>
            </div>
            <div class="loader-bar">
                <div class="loader-progress"></div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <x-layout.header />

    <main>
        {{ $slot }}
    </main>

    <x-layout.footer />

    <!-- Scripts -->
    {{ $scripts ?? '' }}
</body>
</html>
