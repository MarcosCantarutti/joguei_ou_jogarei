@props(['name', 'prefix' => null])

<label {{ $attributes->class(['input', 'input-bordered', 'flex', 'items-center', 'gap-2', 'w-full']) }}>
    @if ($prefix)
    <span class="text-gray-500">{{ $prefix }}</span>
    @endif
    <input class="grow" name="{{ $name }}" type="text" value="{{ old($name) }}" {{ $attributes }}>
</label>
@error($name)
<div class="text-sm text-error mt-1">{{ $message }}</div>
@enderror
