<div class="grid grid-cols-1 gap-0 px-7 md:gap-4 md:grid-cols-1 md:p-9 lg:grid-cols-2 lg:p-3 xl:grid-cols-3 xl:p-2 2xl:grid-cols-4">
    @foreach ($products as $product)
        @livewire('store-item', ['product' => $product])
    @endforeach
</div>
