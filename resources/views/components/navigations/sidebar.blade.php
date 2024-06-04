<aside class="bg-gray-50 w-72 p-2 h-screen">
    <ul>
        @foreach ($items as $item)
            <div class="relative">
                <!-- Main Link -->
                <x-navigations.partials.nav-item
                    :url="$item['default_url']"
                    :title="$item['title']"
                    :isActive="request()->is($item['default_url'])"
                    :hasSubLinks="isset($item['sub_links']) && count($item['sub_links']) > 0 ? true : false">

                    <x-slot name="icon">
                        {!! $item['icon'] !!}
                    </x-slot>

                </x-navigations.partials.nav-item>

                <!-- Sub links -->
                @if (request()->is($item['default_url']) && isset($item['sub_links']) && count($item['sub_links']))
                    <ul x-show="true"
                        class="relative">

                        <!-- Treeview line -->
                        <div class="absolute h-[calc(94%)] w-[1.5px] bg-gray-200 left-4 top-0 bottom-5"></div>

                        @foreach ($item['sub_links'] as $link)
                            <x-navigations.partials.nav-item
                                class="ml-[18px] px-1 relative before:absolute before:h-[1.5px] before:w-3 before:bg-gray-200 before:top-1/2 before:transform before:-translate-x-1/2 before:-translate-y-1/2"
                                :url="$link['default_url']"
                                :title="$link['title']"
                                :isActive="request()->is($link['default_url'])"
                                :hasSubLinks="isset($link['sub_links']) && count($link['sub_links']) > 0 ? true : false" />
                        @endforeach
                    </ul>
                @endif
            </div>
        @endforeach
    </ul>
</aside>
