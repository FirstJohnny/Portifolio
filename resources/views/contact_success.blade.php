<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensagem Enviada</title>
    <!-- Tailwind CSS para estilização rápida e moderna -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#0f172a', // Sua cor de marca
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-50 h-screen flex items-center justify-center font-sans">
    <div class="max-w-md w-full bg-white p-8 rounded-xl shadow-lg text-center transform transition-all hover:scale-105 duration-500">
        <!-- Ícone de Sucesso -->
        <div class="mx-auto flex items-center justify-center h-16 w-16 rounded-full bg-green-100 mb-6">
            <svg class="h-8 w-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
        </div>

        <h2 class="text-2xl font-bold text-primary mb-4">{{ $title ?? 'Mensagem Enviada!' }}</h2>

        <p class="text-gray-600 mb-8">
            {{ $message ?? 'Obrigado pelo contato. Sua mensagem foi recebida com sucesso e retornarei em breve.' }}
        </p>

        <p class="text-sm text-gray-500 mb-6">
            Voltando para a página principal em <span id="countdown" class="font-bold text-primary text-lg">5</span> segundos...
        </p>

        <a href="{{ url('/') }}" class="inline-block w-full px-5 py-3 bg-primary text-white font-medium rounded-lg hover:bg-opacity-90 transition-colors">
            Voltar Agora
        </a>
    </div>

    <script>
        let timeLeft = 5;
        const countdownEl = document.getElementById('countdown');

        const timer = setInterval(() => {
            timeLeft--;
            countdownEl.textContent = timeLeft;
            if (timeLeft <= 0) {
                clearInterval(timer);
                window.location.href = "{{ url('/') }}";
            }
        }, 1000);
    </script>
</body>
</html>
