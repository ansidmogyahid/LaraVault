<aside class="bg-gray-50 w-72 p-2 h-screen">
    <ul>
        @foreach ($items as $item)
            <x-navigations.partials.nav-item
                :url="$item['default_url']"
                :title="$item['title']"
                :isActive="request()->is($item['default_url'])">

                <x-slot name="icon">
                    {!! $item['icon'] !!}
                </x-slot>

            </x-navigations.partials.nav-item>
        @endforeach
    </ul>
</aside>
