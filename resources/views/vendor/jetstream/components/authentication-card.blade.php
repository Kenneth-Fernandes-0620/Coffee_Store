<div :class="Theme" >
    <div class="flex flex-col items-center min-h-screen pt-6 bg-white sm:justify-center sm:pt-0 dark:bg-gray-900">
        <div>
            {{ $logo }}
        </div>

        <div class="w-full px-6 py-4 mt-6 overflow-hidden bg-white shadow-md sm:max-w-md sm:rounded-lg dark:bg-gray-700">
            {{ $slot }}
        </div>
    </div>
</div>
