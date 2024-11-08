<div class="flex flex-col">
    <dt class="flex items-center gap-x-3 text-base/7 font-semibold text-white">
        <x-laravel-icon class="text-indigo-400 h-6"/>
        {{ $sitename }}
    </dt>
    <dd class="mt-4 flex flex-auto flex-col text-base/7 text-gray-300">
        <p class="flex-auto">
            {{ $description }}
        </p>
        <p class="mt-6 gap-x-6 flex justify-center">
            <a href="{{ $website }}" target="_blank" rel="noopener noreferrer"
                class="border-b border-blue-400 flex items-center text-sm/6 font-semibold text-white">
                <x-globe class="mr-2 h-4 text-indigo-400" />
                Website
            </a>
            <a href="{{ $repository }}" target="_blank" rel="noopener noreferrer"
                class="border-b border-blue-400 flex items-center text-sm/6 font-semibold text-white">
                Repository
                <x-github-logo class="ml-2 h-4 text-indigo-400" />
            </a>
        </p>
    </dd>
</div>
