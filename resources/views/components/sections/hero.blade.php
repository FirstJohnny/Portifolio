<section id="home" class="hero">
    <div class="container">
        <div class="hero-content">
            <div class="hero-text animate-fade">
                <h1>{{ $title }}</h1>
                <p>{{ $description }}</p>

                <div class="hero-btns">
                    <x-ui.button href="#projects" variant="primary">
                        <i class="fas fa-code-branch"></i>
                        Ver Projectos
                    </x-ui.button>

                    <x-ui.button href="#contact" variant="outline">
                        <i class="fas fa-paper-plane"></i>
                        Entre em contacto
                    </x-ui.button>
                </div>

                <div class="stats" style="display: flex; gap: 3rem; margin-top: 3rem; flex-wrap: wrap;">
                    @foreach($stats as $stat)
                    <div>
                        <h3 style="font-size: 2rem; color: var(--{{ $stat['color'] }});">
                            {{ $stat['value'] }}
                        </h3>
                        <p style="margin: 0;">{{ $stat['label'] }}</p>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="hero-image">
                <x-ui.terminal />
            </div>
        </div>
    </div>
</section>
