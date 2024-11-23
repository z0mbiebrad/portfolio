<header
    class="top-0 z-50 flex flex-none flex-wrap items-center justify-between bg-white dark:bg-gray-900 dark:text-white px-4 py-5 shadow-md shadow-gray-900/5 transition duration-500 sm:px-6 lg:px-8"
>
    <div class="relative flex flex-grow basis-0 items-center">
        <a
            aria-label="Home"
            href="{{ route('home') }}"
            class="flex items-center space-x-2"
        >
            <x-prezet::logo />
        </a>
    </div>
    <div
        class="relative flex basis-0 items-center justify-end gap-3 sm:gap-8 md:flex-grow lg:gap-6"
    >
        <button id="theme-toggle">
            <span class="inline dark:hidden">
                <x-moon />
            </span>
            <span class="hidden dark:inline">
                <x-sun />
            </span>
        </button>
        <x-prezet::search />
        <button
            aria-label="Menu"
            class="rounded-lg p-1.5 hover:bg-gray-100 active:bg-gray-200 lg:hidden"
            x-on:click="showSidebar = ! showSidebar"
        >
            <x-thumbprint />
        </button>
    </div>
</header>
