@props([
'href'=> null,
'wide' => null,
'outline' => null,
'info' => null
])

@php
$tag = $href ? 'a' : 'button';
@endphp

<{{$tag}} {{$href ? "href=$href" : '' }} {{$attributes->class([
    'btn btn-primary',
    'btn-wide' => $wide,
    'btn-outline'=> $outline,
    'btn-info' => $info
    ])}}>
    {{$slot}}
</{{$tag}}>
