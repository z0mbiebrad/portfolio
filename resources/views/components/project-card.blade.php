<div class="flex flex-col rounded-lg shadow-sm dark:shadow-gray-700 shadow-gray-400 py-5 px-10 dark:bg-gray-950/30 bg-gray-200">
    <dt class="flex items-center gap-x-3 text-base/7 font-semibold dark:text-white">
        <x-laravel-icon class="text-orange-400 dark:text-indigo-500 h-6"/>
        {{ $sitename }}
    </dt>
    <dd class="mt-4 flex flex-auto flex-col text-base/7 text-gray-700 dark:text-gray-300">
        <p class="flex-auto">
            {{ $description }}
        </p>
        <p class="mt-6 gap-x-6 flex justify-center">
            <a href="{{ $website }}" target="_blank" rel="noopener noreferrer"
                class="border-b dark:border-blue-400 border-red-400 flex items-center text-sm/6 font-semibold dark:text-white">
                <x-globe class="mr-2 h-4 text-orange-400 dark:text-indigo-500" />
                Website
            </a>
            <a href="{{ $repository }}" target="_blank" rel="noopener noreferrer"
                class="border-b dark:border-blue-400 border-red-400 flex items-center text-sm/6 font-semibold dark:text-white">
                Repository
                <x-github-logo class="ml-2 h-4 text-orange-400 dark:text-indigo-500" />
            </a>
        </p>
    </dd>
</div>
