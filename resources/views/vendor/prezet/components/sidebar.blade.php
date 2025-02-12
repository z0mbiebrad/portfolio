{{-- Mobile Sidebar --}}
<div
    x-show="showSidebar"
    x-trap.inert.noscroll="showSidebar"
    class="fixed inset-0 z-100 flex h-full items-start overflow-y-auto bg-gray-900/50 pr-10 backdrop-blur-xs lg:hidden"
>
    <div
        class="min-h-full w-full max-w-xs px-4 pb-12 pt-24 sm:px-6"
        x-on:click.outside="showSidebar = false"
    >
        <x-prezet::mobile-menu :nav="$nav" />
    </div>
</div>