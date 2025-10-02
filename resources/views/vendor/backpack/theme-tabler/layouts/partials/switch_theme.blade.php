@php
    $colorModes = backpack_theme_config('options.colorModes', []);
    $defaultColorMode = backpack_theme_config('options.defaultColorMode', 'system');
@endphp

<div class="dropdown">
    <button class="btn btn-ghost-secondary btn-icon rounded-circle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="la la-sun"></i>
    </button>
    <ul class="dropdown-menu">
        @foreach($colorModes as $mode => $icon)
            <li>
                <a class="dropdown-item color-mode-switcher" href="#" data-color-mode="{{ $mode }}">
                    <i class="la {{ $icon }}"></i> {{ ucfirst($mode) }}
                </a>
            </li>
        @endforeach
    </ul>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const switchers = document.querySelectorAll('.color-mode-switcher');
    const body = document.body;

    // Load saved theme
    const savedTheme = localStorage.getItem('backpack-color-mode') || '{{ $defaultColorMode }}';
    setTheme(savedTheme);

    switchers.forEach(switcher => {
        switcher.addEventListener('click', function(e) {
            e.preventDefault();
            const mode = this.getAttribute('data-color-mode');
            setTheme(mode);
            localStorage.setItem('backpack-color-mode', mode);
        });
    });

    function setTheme(mode) {
        if (mode === 'system') {
            const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
            body.setAttribute('data-bs-theme', prefersDark ? 'dark' : 'light');
        } else {
            body.setAttribute('data-bs-theme', mode);
        }
    }

    // Listen for system theme changes
    window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', function(e) {
        const savedTheme = localStorage.getItem('backpack-color-mode') || '{{ $defaultColorMode }}';
        if (savedTheme === 'system') {
            setTheme('system');
        }
    });
});
</script>