<section id="projects" class="projects">
    <div class="container">
        <h2 class="animate-fade">Projetos de segurança em destaque</h2>
        <div class="projects-grid">
            @foreach($projects as $index => $project)
            <x-ui.card
                variant="project"
                :icon="$project['icon']"
                :title="$project['title']"
                :description="$project['description']"
                :tags="$project['tags']"
                :animationDelay="$index * 0.1"
            >
                <div class="project-links">
                    @foreach($project['links'] as $link)
                    <a href="{{ $link['url'] }}" class="project-link">
                        <i class="fas fa-{{ $link['icon'] }}"></i>
                        {{ $link['label'] }}
                    </a>
                    @endforeach
                </div>
            </x-ui.card>
            @endforeach
        </div>
    </div>
</section>
