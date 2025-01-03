<header class="absolute inset-x-0 top-0 z-50 bg-white/60 dark:bg-black/10">
    <nav class="flex items-center justify-end p-6 lg:px-8" aria-label="Global">
        <button id="theme-toggle" class="dark:text-white mr-6 lg:mr-12">
            <span class="inline dark:hidden">
                <x-moon />
            </span>
            <span class="hidden dark:inline">
                <x-sun />
            </span>
        </button>
        <div class="flex lg:hidden dark:text-white gap-x-6">
            <button id="open-menu-button" type="button"
                class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5">
                <span class="sr-only">Open main menu</span>
                <x-bars />
            </button>
        </div>
        <div class="hidden lg:flex lg:gap-x-12 text-sm/6 font-semibold dark:text-white text-black">
            <div class="hidden lg:flex lg:gap-x-12 text-sm/6 font-semibold dark:text-white text-black">
                <a href="{{ route('home') }}" class="">About</a>
                <a href="{{ route('prezet.index') }}" class="">Blog</a>
                <a href="/#contact" class="">Contact</a>
            </div>
        </div>
    </nav>
    <!-- Mobile menu, show/hide based on menu open state. -->
    <div id="mobile-menu" class="hidden" role="dialog" aria-modal="true">
        <!-- Background backdrop, show/hide based on slide-over state. -->
        <div class="fixed inset-0 z-50"></div>
        <div
            class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-gray-900 px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-white/10">
            <div class="flex items-center justify-between">
                <x-nav-logo />
                <button id="close-menu-button" type="button" class="-m-2.5 rounded-md p-2.5 text-gray-400">
                    <span class="sr-only">Close menu</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="mt-6 flow-root">
                <div class="-my-6 divide-y divide-gray-500/25">
                    <div class="space-y-2 py-6">
                        <a href="{{ route('home')}}"
                            class="nav-link -mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-white hover:bg-gray-800">About</a>
                        <a href="{{ route('prezet.index') }}"
                            class="nav-link -mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-white hover:bg-gray-800">Blog</a>
                        <a href="/#contact"
                            class="nav-link -mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-white hover:bg-gray-800">Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<script>
    jQuery(document).ready(function() {
        // Open the mobile menu
        console.log('jquery is running');
        jQuery('#open-menu-button').click(function() {
            console.log('open');
            jQuery('#mobile-menu').removeClass('hidden'); // Show mobile menu
        });

        // Close the mobile menu
        jQuery('#close-menu-button').click(function() {
            jQuery('#mobile-menu').addClass('hidden'); // Hide mobile menu
        });
        jQuery('.nav-link').click(function() {
            jQuery('#mobile-menu').addClass('hidden'); // Hide mobile menu
        });
    });
</script>
<script>
    const rootElement = document.documentElement;
    const savedTheme = localStorage.getItem('theme');

    if (savedTheme) {
        rootElement.classList.toggle('dark', savedTheme === 'dark');
    } else {
        const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
        rootElement.classList.toggle('dark', prefersDark);
    }
</script>
<script defer>
    document.addEventListener('DOMContentLoaded', () => {
        const toggleButton = document.getElementById('theme-toggle');
        const rootElement = document.documentElement;

        toggleButton.addEventListener('click', () => {
        const isDarkMode = rootElement.classList.toggle('dark');
        localStorage.setItem('theme', isDarkMode ? 'dark' : 'light');
        });
    });
</script>

