@props([
    'url' => '',
    'title' => '',
    'isActive' => true,
    'hasSubLinks' => false,
])

@php
    $isActiveClass = $isActive ? 'bg-gray-200' : 'bg-transparent hover:bg-gray-100 block';
@endphp

<li {{ $attributes->merge(['class' => "rounded p-2.5 $isActiveClass"]) }}>
    <a href="{{ $url }}" class="flex items-center text-sm {{ $isActive ? 'text-black font-semibold' : 'text-gray-500 font-medium' }}">
        @isset($icon)
            {{ $icon }}
        @endisset

        <div class="flex items-center justify-between w-full">
            <span class="ml-2">{{ $title }}</span>

            @if ($hasSubLinks)
                <svg class="{{ $isActive ? 'rotate-180' : '' }}" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m19.5 8.25l-7.5 7.5l-7.5-7.5"/></svg>
            @endif
        </div>
    </a>
</li>
