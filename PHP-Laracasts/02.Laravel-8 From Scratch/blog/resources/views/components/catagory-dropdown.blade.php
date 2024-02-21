<x-dropdown>
    <x-slot name="trigger">
        <button class="py-2 pl-3 pr-9 text-sm font-semibold w-full lg:w-32 text-left flex lg:inline-flex">
            {{ isset($currentCatagory) ? ucwords($currentCatagory->name) : 'Catagories' }}

            <x-icon name="down-arrow" class="absolute pointer-events-none" style="right: 12px;"/>
        </button>
    </x-slot>

    <x-dropdown-item href="/?{{ http_build_query(request()->except('catagory', 'page')) }}"
                     :active="request()->routeIs('home')">All
    </x-dropdown-item>

    @foreach ($catagories as $catagory)
        <x-dropdown-item
            href="/?catagory={{ $catagory->slug }}&{{ http_build_query(request()->except('catagory', 'page')) }}"
            :active='request()->is("catagories/{$catagory->slug}")'
        >{{ ucwords($catagory->name) }}</x-dropdown-item>
    @endforeach
</x-dropdown>