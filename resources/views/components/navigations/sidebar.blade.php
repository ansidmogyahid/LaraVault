<aside class="bg-gray-50 w-72 p-2 h-screen">
    <ul>
        @foreach ($items as $item)
            <x-navigations.partials.nav-item
                :url="$item['default_url']"
                :title="$item['title']"
                :isActive="request()->is($item['default_url'])"
                :hasSubLinks="isset($item['sub_links']) && count($item['sub_links']) > 0 ? true : false">

                <x-slot name="icon">
                    {!! $item['icon'] !!}
                </x-slot>

            </x-navigations.partials.nav-item>

            @if (isset($item['sub_links']) && count($item['sub_links']))
                <ul class="indent-5">
                    @foreach ($item['sub_links'] as $link)
                        <x-navigations.partials.nav-item
                            :url="$link['default_url']"
                            :title="$link['title']"
                            :isActive="request()->is($link['default_url'])"
                            :hasSubLinks="isset($link['sub_links']) && count($link['sub_links']) > 0 ? true : false" />
                    @endforeach
                </ul>
            @endif
        @endforeach
    </ul>
</aside>
