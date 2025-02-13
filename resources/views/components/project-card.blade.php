<div class="flex flex-col px-10 py-5 bg-gray-200 rounded-lg shadow-2xs dark:shadow-gray-700 shadow-gray-400 dark:bg-gray-950/30">
    <dt class="flex items-center font-semibold gap-x-3 text-base/7 dark:text-white">
        <x-laravel-icon class="h-6 text-orange-400 dark:text-indigo-500"/>
        {{ $sitename }}
    </dt>
    <dd class="flex flex-col flex-auto mt-4 text-gray-700 text-base/7 dark:text-gray-300">
        <p class="flex-auto">
            {{ $description }}
        </p>
        <p class="flex justify-center mt-6 gap-x-6">
            <a href="{{ $website }}" target="_blank" rel="noopener noreferrer"
                class="flex items-center font-semibold text-sm/6 dark:text-white">
                <x-globe class="h-4 mr-2 text-orange-400 dark:text-indigo-500" />
                Website
            </a>
            <a href="{{ $repository }}" target="_blank" rel="noopener noreferrer"
                class="flex items-center font-semibold text-sm/6 dark:text-white">
                Repository
                <x-github-logo class="h-4 ml-2 text-orange-400 dark:text-indigo-500" />
            </a>
        </p>
    </dd>
</div>
