@props(['title' => null, 'actions' => null])

<div {{ $attributes->class(['card', 'bg-base-100', 'shadow-xl', 'w-2/3']) }}>
    <div class="card-body">
        @if ($title)
        <div class="card-title mb-4">{{ $title }}</div>
        @endif

        {{ $slot }}

        @if ($actions)
        <div class="card-actions flex items-center justify-between mt-6">
            {!! $actions !!}
        </div>
        @endif
    </div>
</div>
