<div class="pt-0 md:pt-6 pb-6 rounded drop-shadow-lg shadow-xl transform transition duration-300 hover:scale-110 hover:bg-gray-100  dark:bg-gray-900 dark:hover:bg-black">
    <a href="{{ url('/store')}}">
        <div class="flex items-center flex-col">
            <div class="max-w-md mx-auto bg-white rounded-md overflow-hidden md:max-w-2xl">
                <div class="md:flex">
                    <div class="md:shrink-0 ">
                        <img class="h-60 w-fit object-cover md:h-100 md:w-48 lg:w-fit border-2 border-gray-500 dark:border-white" src={{ $imagesrc }} alt={{ $heading }}>
                    </div>
                </div>
            </div>
        </div>
        <div class="p-8">
            <div class="uppercase tracking-wide font-bold text-center dark:text-white">{{ $heading }}</div>
        </div>
        <div class="ml-12">
            <div class=" text-sm text-gray-500 dark:text-white">
                {{$description}}
            </div>
            <div class="mt-3 flex items-center text-sm font-semibold text-indigo-700">
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