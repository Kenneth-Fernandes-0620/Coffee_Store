<div class="pt-0 pb-6 transition duration-300 transform rounded shadow-xl md:pt-6 drop-shadow-lg hover:scale-110 hover:bg-gray-100 dark:bg-gray-900 dark:hover:bg-black">
    <a href="{{ url('/store')}}">
        <div class="flex flex-col items-center">
            <div class="max-w-md mx-auto overflow-hidden bg-white rounded-md md:max-w-2xl">
                <div class="md:flex">
                    <div class="md:shrink-0 ">
                        <img class="object-cover border-2 border-gray-500 h-60 w-fit md:h-100 md:w-48 lg:w-fit dark:border-white" src={{ $imagesrc }} alt={{ $heading }}>
                    </div>
                </div>
            </div>
        </div>
        <div class="p-8">
            <div class="font-bold tracking-wide text-center uppercase dark:text-white">{{ $heading }}</div>
        </div>
        <div class="ml-12 mr-7">
            <div class="text-sm text-gray-500 dark:text-white">
                {{$description}}
            </div>
            <div class="flex items-center mt-3 text-sm font-semibold text-indigo-700">
                <div>Shop Now</div>

                <div class="ml-1 text-indigo-500">
                    <svg viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </div>
            </div>
        </div>
    </a>
</div>