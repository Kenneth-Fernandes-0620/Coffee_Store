<div class="py-3 my-3 bg-white rounded-lg drop-shadow-lg lg:max-h-64" x-data="{ item: 0 }">
    <div class="grid h-full grid-cols-1 gap-0 p-0 md:p-3 md:grid-cols-2">
        <div class="flex w-full h-40"> <img src="{{ $productImage }}" class="flex-1 h-full rounded-lg"> </div>
        <div class="flex flex-col p-2">
            <div class="h-10 font-bold text-center">{{ $productName }}</div>
            <p class="flex-1 text-justify">Some Dummy Description of the product</p>
            <div class="">
                <div class="flex" href>
                    <span
                        class="flex items-center justify-center flex-shrink-0 w-12 h-12 transition duration-500 ease-in-out border border-r-0 border-black hover:bg-red-500 hover:text-white"
                        x-on:click="(item>0)?item--:''">
                        <svg enable-background="new 0 0 50 50" height="50px" id="Layer_1" version="1.1"
                            viewBox="0 0 50 50" width="50px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                            <rect fill="none" height="50" width="50" />
                            <line fill="none" stroke="#000000" stroke-miterlimit="10" stroke-width="2" x1="9" x2="41"
                                y1="25" y2="25" />
                        </svg>
                    </span>
                    <span
                        class="flex items-center justify-center flex-1 h-12 text-lg font-semibold text-center capitalize transition duration-500 ease-in-out border border-black md:text-base"
                        x-text="item == 0? 'Add to Cart': item"></span>
                    <span
                        class="flex items-center justify-center flex-shrink-0 w-12 h-12 transition duration-500 ease-in-out border border-l-0 border-black hover:bg-green-600 hover:text-white"
                        x-on:click="item++">
                        <svg enable-background="new 0 0 50 50" height="50px" id="Layer_1" version="1.1"
                            viewBox="0 0 50 50" width="50px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                            <rect fill="none" height="50" width="50" />
                            <line fill="none" stroke="#000000" stroke-miterlimit="10" stroke-width="2" x1="9" x2="41"
                                y1="25" y2="25" />
                            <line fill="none" stroke="#000000" stroke-miterlimit="10" stroke-width="2" x1="25" x2="25"
                                y1="9" y2="41" />
                        </svg>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
