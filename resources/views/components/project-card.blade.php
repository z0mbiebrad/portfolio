<div class="flex flex-col">
    <dt class="flex items-center gap-x-3 text-base/7 font-semibold text-white">
        <x-laravel-icon />
        {{ $sitename }}
    </dt>
    <dd class="mt-4 flex flex-auto flex-col text-base/7 text-gray-300">
        <p class="flex-auto">
            {{ $description }}
        </p>
        <p class="mt-6 flex justify-between">
            <a href="{{ $website }}"
                class="border-b border-blue-400 flex items-center text-sm/6 font-semibold text-indigo-300">
                <x-globe class="mr-2 h-4 text-blue-400"/>
                Website
            </a>
            <a href="{{ $repository }}"
                class="border-b border-blue-400 flex items-center text-sm/6 font-semibold text-indigo-300">
                Repository
                <x-github-logo class="ml-2 h-4 text-blue-400"/>
            </a>
        </p>
    </dd>
</div>
