@props([
    'url' => '',
    'title' => '',
    'isActive' => true,
])

<li class="rounded p-2.5 {{ $isActive ? 'bg-gray-200' : 'bg-transparent' }}">
    <a href="{{ $url }}" class="flex items-center text-gray-900 text-sm">
        {{ $icon }}
        <span class="ml-2">{{ $title }}</span>
    </a>
</li>
