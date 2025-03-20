<header
    class="top-0 z-50 flex flex-wrap items-center justify-between flex-none px-4 py-5 transition duration-500 bg-zinc-100 dark:bg-zinc-900 dark:text-white shadow-gray-900/5 sm:px-6 lg:px-8"
>
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
            class="rounded-lg p-1.5 hover:bg-zinc-100 active:bg-zinc-200 lg:hidden"
            x-on:click="showSidebar = ! showSidebar"
        >
            <x-bars />
        </button>
    </div>
</header>