<section id="skills" class="skills">
    <div class="container">
        <h2 class="animate-fade">Conhecimento técnico</h2>
        <div class="skills-grid">
            @foreach($skills as $index => $skill)
            <x-ui.card
                :icon="$skill['icon']"
                :title="$skill['title']"
                :description="$skill['description']"
                :tags="$skill['tags']"
                :animationDelay="$index * 0.1"
                variant="skill"
            />
            @endforeach
        </div>
    </div>
</section>
