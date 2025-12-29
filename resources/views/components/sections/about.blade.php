<section id="about" class="about-section">
    <div class="container">
        <h2 class="animate-fade">Arquivo Pessoal & Jornada</h2>

        <div class="about-grid">
            <!-- Texto / Bio -->
            <div class="about-text animate-fade">
                <h3 style="color: var(--primary); margin-bottom: 1rem;">Quem sou eu</h3>
                <p class="lead">{{ $bio }}</p>

                <div class="journey-list">
                    @foreach($journey as $step)
                        <div class="journey-item">
                            <i class="fas fa-chevron-right" style="color: var(--accent);"></i>
                            <p>{{ $step }}</p>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Galeria -->
            <div class="about-gallery animate-fade" style="animation-delay: 0.2s;">
                @foreach($gallery as $photo)
                    <div class="gallery-item">
                        <img src="{{ $photo['url'] }}" alt="{{ $photo['alt'] }}">
                        <div class="overlay"><span>{{ $photo['alt'] }}</span></div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
