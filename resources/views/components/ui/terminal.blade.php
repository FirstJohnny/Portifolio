<div class="hacker-terminal animate" style="animation-delay: 0.3s;">
    <div class="terminal-header">
        <div class="terminal-dot dot-red"></div>
        <div class="terminal-dot dot-yellow"></div>
        <div class="terminal-dot dot-green"></div>
        <span style="margin-left: 1rem; color: var(--light); font-size: 0.9rem;">

            terminal_seguro
        </span>
    </div>
    <div class="terminal-content">
        @foreach ($lines as $index => $line)
            <div class="terminal-line" style="animation-delay: {{ $index * 0.5 }}s;">
                @if ($line['type'] === 'command')
                    <span class="prompt">$</span> <span class="command">{{ $line['content'] }}</span>
                @elseif($line['type'] === 'output')
                    <span class="output">{{ $line['content'] }}</span>
                @elseif($line['type'] === 'cursor')
                    <span class="prompt">$</span> <span class="command blink">{{ $line['content'] }}</span>
                @endif
            </div>
        @endforeach
    </div>
</div>
