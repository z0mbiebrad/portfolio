 <!-- Mobile menu, show/hide based on menu open state. -->
 <div id="mobile-menu" role="dialog" aria-modal="true" x-on:click="showSidebar = ! showSidebar">
    <!-- Background backdrop, show/hide based on slide-over state. -->
    <div class="fixed inset-0 z-100"></div>
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