@props(['href' => '#', 'disabled' => false])

<a @if ($disabled) class="link-disabled" @else href="{{ $href }}" {{ $attributes->class(['link', 'link-primary',
    'link-hover']) }}
    @endif
    >
    {{ $slot }}
</a>
