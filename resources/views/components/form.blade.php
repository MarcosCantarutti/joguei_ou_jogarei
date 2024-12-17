@props(['route', 'post' => null, 'put' => null, 'delete' => null, 'patch' => null]);

@php
$method = $post || $put || $delete || $patch ? 'post' : 'get';
@endphp

<form action="{{$route}}" method="{{$method}}" {{$attributes->class(['flex flex-col gap-4'])}}>
    {{-- token --}}
    @csrf

    @if ($put)
    @method('put')
    @endif

    @if ($delete)
    @method('delete')
    @endif

    @if ($patch)
    @method('patch')
    @endif

    {{$slot}}
    <br>
</form>
