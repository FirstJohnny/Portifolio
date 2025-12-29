@if($variant === 'skill')
<div
    class="skill-card animate"
    style="animation-delay: {{ $animationDelay }}s;"
>
    <i class="fas fa-{{ $icon }} skill-icon"></i>
    <h3>{{ $title }}</h3>
    <p>{{ $description }}</p>

    @if(count($tags) > 0)
    <div class="skill-tags">
        @foreach($tags as $tag)
        <span class="skill-tag">{{ $tag }}</span>
        @endforeach
    </div>
    @endif
</div>

@elseif($variant === 'project')
<div
    class="project-card animate"
    style="animation-delay: {{ $animationDelay }}s;"
>
    <div class="project-img">
        <i class="fas fa-{{ $icon }}"></i>
    </div>
    <div class="project-info">
        <h3>{{ $title }}</h3>
        <p>{{ $description }}</p>

        @if(count($tags) > 0)
        <div class="project-tags">
            @foreach($tags as $tag)
            <span class="project-tag">{{ $tag }}</span>
            @endforeach
        </div>
        @endif

        {{ $slot }}
    </div>
</div>

@else
<div class="card card-{{ $variant }}">
    {{ $slot }}
</div>
@endif
