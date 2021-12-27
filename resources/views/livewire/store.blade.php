<div class="p-0 m-0" :class="message" x-data="{itemTotal:0, itemTotalIndex:0}">
    <div class="py-6 dark:bg-gray-900">
        <div x-init="itemTotalIndex = cart.findIndex(obj => obj.Name == 'items');if( itemTotalIndex == -1) cart.push({ Name:'items', value : 0});"
            class="grid grid-cols-1 gap-0 px-7 md:gap-4 md:grid-cols-1 md:p-9 lg:grid-cols-2 lg:p-3 xl:grid-cols-3 xl:p-2 2xl:grid-cols-4 ">
            @foreach ($products as $product)
                @livewire('store-item', ['product' => $product])
            @endforeach
        </div>
    </div>
</div>
