<div class=" {{ $Theme }} m-0 p-0" x-init="$wire.Theme = message">
    <div class="min-h-full py-11 dark:bg-gray-900">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-transparent shadow-xl sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 sm:px-20 dark:bg-gray-700 dark:border-black">
                    <div class="mt-4 text-2xl font-bold dark:text-white">
                        Welcome to Kenneth's Cafe
                    </div>
                    <div class="mt-6 text-justify text-gray-500 dark:text-gray-50">
                        Kenneth's Cafe is Goa's favourite hangout for coffee and conversations.
                        Our coffees are locally sourced from small coffee planters, who we continue to have
                        a close a personal relationship with and are glad to be a part of their lives.
                        We here at Kenneth's Cafe are committed to providing you with not only the best coffee in the
                        world but also
                        the best experience one can expect of such an elegant cafe. Get Started by visiting our store.
                    </div>
                    <div class="grid grid-cols-1 mt-3 bg-opacity-0 gap-7 md:grid-cols-2">
                        @livewire('card', ['imagesrc' =>
                        'https://media-cldnry.s-nbcnews.com/image/upload/t_fit-1240w,f_auto,q_auto:best/newscms/2019_33/2203981/171026-better-coffee-boost-se-329p.jpg',
                        'heading' => 'Coffee', 'description' => 'Choose from our wide and exquisite range of Mid to High
                        Tier coffees'])
                        @livewire('card', ['imagesrc' =>
                        'https://perfectdailygrind.com/wp-content/uploads/2020/04/Hs_5Ce8ecmXodh-AdEVHyT07irPaZ-zAAhYkKYRJgS5CVzHKs0cAAdyeAF9TIgyh4KI5gqYmyuIDwJnf2f9wCdNvJ5WbQOlSoRr5zmmzMalyR1-RQxvlOtTZkJq9G_GPUiVZ6_WX-1-1-1024x683.jpeg',
                        'heading' => 'Chocolates', 'description' => 'We have Chocolates for your every day, mood and lifestyle needs'])
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
