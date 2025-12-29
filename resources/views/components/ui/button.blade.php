@if($href && $type === 'button')
<a
    href="{{ $href }}"
    class="btn btn-{{ $variant }} {{ $disabled ? 'disabled' : '' }}"
    {{ $disabled ? 'aria-disabled="true" tabindex="-1"' : '' }}
>
    {{ $slot }}
</a>
@else
<button
    type="{{ $type }}"
    class="btn btn-{{ $variant }} {{ $disabled ? 'disabled' : '' }}"
    {{ $disabled ? 'disabled' : '' }}
>
    {{ $slot }}
</button>
@endif
