@props(['route', 'post' => false, 'put' => false, 'delete' => false, 'patch' => false])

@php
$method = $post || $put || $delete || $patch ? 'post' : 'get';
@endphp

<form action="{{ $route }}" method="{{ $method }}" {{ $attributes->class(['flex', 'flex-col', 'gap-4'])->merge() }}>
    {{-- Token CSRF para métodos que não são GET --}}
    @if ($method === 'post')
    @csrf
    @endif

    {{-- Método HTTP --}}
    @if ($put)
    @method('put')
    @elseif ($delete)
    @method('delete')
    @elseif ($patch)
    @method('patch')
    @endif

    {{-- Conteúdo do slot --}}
    {{ $slot }}
</form>
