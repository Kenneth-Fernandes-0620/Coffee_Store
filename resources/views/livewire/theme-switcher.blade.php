<div class="m-6 flex items-center justify-center">
    <style>
        input:checked~.dot {
            transform: translateX(100%);
            background-color: #48bb78;
        }
    </style>
    <label for="toggleB" class="flex items-center justify-center cursor-pointer">
        <div class="relative">
            <input type="checkbox" id="toggleB" class="sr-only" name="ThemeToggle" {{$isChecked}} wire:click="$emit('switchTheme')">
            <!-- line -->
            <div class="block bg-gray-800 w-14 h-8 rounded-full"></div>
            <!-- dot -->
            <div class="dot absolute left-1 top-1 bg-white w-6 h-6 rounded-full transition"></div>
        </div>
    </label>
</div>