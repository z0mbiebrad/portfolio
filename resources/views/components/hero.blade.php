<div id="about" class="relative isolate overflow-hidden pt-[4.5rem]">
    <img src="{{ asset('images/back2.jpg') }}" alt="" class="absolute inset-0 hidden object-cover w-full h-full dark:inline -z-10">
    <img src="{{ asset('images/sun.jpg') }}" alt="" class="absolute inset-0 inline object-cover w-full h-full dark:hidden -z-10">
    <div class="absolute inset-x-0 overflow-hidden -top-40 -z-10 transform-gpu blur-3xl sm:-top-80" aria-hidden="true">
        <div class="relative left-[calc(50%-11rem)] aspect-1155/678 w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-linear-to-tr from-[#ff80b5] to-[#9089fc] opacity-20 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"
            style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
        </div>
    </div>
    <div class="flex flex-wrap text-black dark:text-white bg-white/70 dark:bg-black/40 sm:justify-center">
        <div class="w-full max-w-5xl mb-10 sm:w-11/12">
            <div class="container h-full mx-auto">
                <img src="{{ asset('images/family.png') }}"
                    alt="" class="object-cover object-top w-full h-48 my-16 sm:h-80 rounded-md shadow-xl">
                <header class="container h-full">
                    <div class="w-full">
                        <h1 class="mx-auto text-4xl font-bold sm:text-5xl lg:text-6xl w-fit">Hi! I'm <span class="text-orange-600 dark:text-indigo-400">Bradley
                                Evans</span>. <br>
                            It's nice to meet <span class="text-orange-600 dark:text-indigo-400">you</span>!</h1>
                        <div class="w-3/4 h-1 mx-auto my-12 bg-orange-600 dark:bg-indigo-400"></div>
                        <div class="grid grid-cols-2 sm:grid-cols-4 place-items-center mb-6">
                            <a href="https://tailwindcss.com/" target="_blank" class="w-full h-16 hover:-rotate-3 group hover:scale-105 transition-all ease-out duration-300 text-center flex flex-col font-bold items-center justify-center">
                                <x-tailwind class="m-2"/>
                            </a>
                            <a href="https://alpinejs.dev" target="_blank" class="w-full h-16 hover:-rotate-3 group hover:scale-105 transition-all ease-out duration-300 text-center flex flex-col font-bold items-center justify-center">
                                <x-alpine class="m-2"/>
                            </a>
                            <a href="https://laravel.com/" target="_blank" class="w-full h-16 hover:-rotate-3 group hover:scale-105 transition-all ease-out duration-300 text-center flex flex-col font-bold items-center justify-center">
                                <x-laravel class="m-1"/>
                            </a>
                            <a href="https://alpinejs.dev" target="_blank" class="w-full h-16 hover:-rotate-3 group hover:scale-105 transition-all ease-out duration-300 text-center flex flex-col font-bold items-center justify-center">
                                <x-livewire class="m-2"/>
                            </a>
                        </div>

                        <p class="max-w-4xl px-5 mx-auto mb-12 text-xl w-fit">
                           I’m a <span class="font-bold">Full-Stack Developer</span> specializing in the TALL stack with a strong focus on problem-solving, critical thinking, and user experience. My approach is simple: make it work, then make it great.  I’m eager to join a stable development team where I can learn, collaborate, and grow, bringing adaptability, attention to detail, and a relentless drive to solve problems.
                        </p>
                        <div class="flex items-center justify-center mt-10 font-semibold gap-x-6 dark:text-white">
                            <a href="#examples"
                                class="flex text-sm md:text-base lg:text-lg gap-x-1">
                                <x-command />
                                    Projects
                            </a>
                            <a href="#services"
                                class="flex text-base lg:text-lg gap-x-1">
                                Contact
                                <x-chat />
                            </a>
                        </div>
                    </div>
                </header>
            </div>
        </div>

    </div>
    <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]"
        aria-hidden="true">
        <div class="relative left-[calc(50%+3rem)] aspect-1155/678 w-[36.125rem] -translate-x-1/2 bg-linear-to-tr from-[#ff80b5] to-[#9089fc] opacity-20 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]"
            style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
        </div>
    </div>
</div>
