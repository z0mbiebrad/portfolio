<header
    class="top-0 z-50 flex flex-wrap items-center justify-between flex-none px-4 py-5 transition duration-500 bg-white shadow-md dark:bg-gray-900 dark:text-white shadow-gray-900/5 sm:px-6 lg:px-8"
>
    <div class="relative flex items-center grow basis-0">
        <a
            aria-label="Home"
            href="{{ route('home') }}"
            class="flex items-center space-x-2"
        >
            <x-prezet::logo />
        </a>
    </div>
    <div
        class="relative flex items-center justify-end gap-3 basis-0 sm:gap-8 md:grow lg:gap-6"
    >
        <div class="items-center hidden font-semibold text-black lg:flex lg:gap-x-12 text-sm/6 dark:text-white">
            <x-dark-toggle />
            <a 
                href="{{ route('home') }}" 
                class="p-2 cursor-pointer text-neutral-600 hover:text-black hover:cursor-pointer dark:text-neutral-300 dark:hover:text-white"
            >
                About
            </a>
            <a 
                href="/#contact" 
                class="p-2 cursor-pointer text-neutral-600 hover:text-black hover:cursor-pointer dark:text-neutral-300 dark:hover:text-white"
            >
                Contact
            </a>
            <x-prezet::search />
        </div>
        <button
            aria-label="Menu"
            class="rounded-lg p-1.5 hover:bg-gray-100 active:bg-gray-200 lg:hidden"
            x-on:click="showSidebar = ! showSidebar"
        >
            <x-bars />
        </button>
    </div>
</header>