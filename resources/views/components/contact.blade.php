<div id="contact">
    <div x-data="{ open: {{ session('success') ? 'true' : 'false' }} }" x-show="open">
        @if (session('success'))
            <div class="alert alert-success">
                <div
                    class="relative flex p-4 border-b border-zinc-300 bg-zinc-50 text-zinc-600 dark:border-zinc-700 dark:bg-zinc-900 dark:text-zinc-300">
                    <p class="px-6 mx-auto text-md sm:text-lg text-pretty">
                        {{ session('success') }}
                    </p>
                    <button @click="open = false" class="absolute -translate-y-1/2 top-1/2 right-4"
                        aria-label="dismiss banner">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true"
                            stroke="currentColor" fill="none" stroke-width="2.5" class="size-4 shrink-0">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        @endif
    </div>
    <form action="{{ route('contact.store') }}" method="POST" class="px-6 pt-20 pb-24 sm:pb-32 lg:px-8 lg:py-48">
        @csrf
        <div class="relative isolate bg-zinc-100 dark:bg-zinc-900">
            <div
                class="grid grid-cols-1 py-10 mx-auto rounded-lg max-w-7xl lg:grid-cols-2 bg-zinc-200 dark:bg-zinc-800 md:px-24">
                <div class="relative px-6 pb-20 mt-9 lg:static lg:px-8">
                    <div class="p-8 mx-auto rounded-lg lg:mx-0 lg:max-w-lg bg-zinc-300 dark:bg-zinc-700">
                        <h2 class="text-4xl font-semibold tracking-tight text-pretty dark:text-white sm:text-5xl">Get in
                            touch
                        </h2>
                        <p class="mt-6 text-gray-700 text-lg/8 dark:text-gray-300">I would love to bring your idea to
                            life! Lets get in
                            contact!
                        </p>
                        <dl class="mt-10 space-y-4 text-gray-700 text-base/7 dark:text-gray-300">
                            <div class="flex gap-x-4">
                                <dd class="flex items-center">
                                    <a href="mailto:bradleyt.evans@gmail.com" title="Email Me">
                                        <div
                                            class="p-2 cursor-pointer text-neutral-600 hover:bg-zinc-400 dark:hover:bg-zinc-800 hover:rounded-md hover:text-black hover:cursor-pointer dark:text-neutral-300 dark:hover:text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="size-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                                            </svg>
                                        </div>
                                    </a>
                                    <a href="https://github.com/z0mbiebrad" target="_blank" title="GitHub Profile">
                                        <div
                                            class="p-2 cursor-pointer text-neutral-600 hover:bg-zinc-400 dark:hover:bg-zinc-800 hover:rounded-md hover:text-black hover:cursor-pointer dark:text-neutral-300 dark:hover:text-white">
                                            <svg class="h-6 text-neutral-600 dark:text-neutral-300"
                                                xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 496 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                                <path fill="currentColor"
                                                    d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3 .3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5 .3-6.2 2.3zm44.2-1.7c-2.9 .7-4.9 2.6-4.6 4.9 .3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3 .7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3 .3 2.9 2.3 3.9 1.6 1 3.6 .7 4.3-.7 .7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3 .7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3 .7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z" />
                                            </svg>
                                        </div>
                                    </a>
                                    <a href="https://linkedin.com/in/bradleytevans" target="_blank"
                                        title="LinkedIn Profile">
                                        <div
                                            class="p-2 cursor-pointer text-neutral-600 hover:bg-zinc-400 dark:hover:bg-zinc-800 hover:rounded-md hover:text-black hover:cursor-pointer dark:text-neutral-300 dark:hover:text-white">
                                            <svg class="h-6 text-neutral-600 dark:text-neutral-300"
                                                xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                                <path fill="currentColor"
                                                    d="M100.3 448H7.4V148.9h92.9zM53.8 108.1C24.1 108.1 0 83.5 0 53.8a53.8 53.8 0 0 1 107.6 0c0 29.7-24.1 54.3-53.8 54.3zM447.9 448h-92.7V302.4c0-34.7-.7-79.2-48.3-79.2-48.3 0-55.7 37.7-55.7 76.7V448h-92.8V148.9h89.1v40.8h1.3c12.4-23.5 42.7-48.3 87.9-48.3 94 0 111.3 61.9 111.3 142.3V448z" />
                                            </svg>
                                        </div>
                                    </a>
                                </dd>
                            </div>
                        </dl>
                    </div>
                </div>
                <form action="#" method="POST" class="px-6 pt-20 pb-24 sm:pb-32 lg:px-8 lg:py-48">
                    <div class="w-full px-4 mx-auto lg:mr-0 lg:max-w-lg md:px-12">
                        <div class="flex flex-col my-8 gap-x-8 gap-y-6 sm:grid-cols-2">
                            <div class="sm:col-span-2">
                                <label for="email" class="block font-semibold text-sm/6 dark:text-white" required>
                                    Email
                                </label>
                                <div class="mt-2.5">
                                    <input type="email" name="email" id="email" autocomplete="email" required
                                        class="block w-full rounded-md border-0 dark:bg-white/5 px-3.5 py-2 dark:text-white shadow-2xs ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm/6">
                                </div>
                            </div>
                            <div class="sm:col-span-2" x-data="{ message: '', error: '' }">
                                <label for="phone-number" class="block font-semibold text-sm/6 dark:text-white">Phone
                                    number</label>
                                <div class="mt-2.5">
                                    <input type="tel" name="phone-number" id="phone-number" autocomplete="tel"
                                        minlength="9" maxlength="9" required
                                        class="block w-full rounded-md border-0 dark:bg-white/5 px-3.5 py-2 dark:text-white shadow-2xs ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm/6">
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="message"
                                    class="block font-semibold text-sm/6 dark:text-white">Message</label>
                                <div class="mt-2.5">
                                    <textarea name="message" id="message" rows="4" required
                                        class="block w-full rounded-md border-0 dark:bg-white/5 px-3.5 py-2 dark:text-white shadow-2xs ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm/6"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-end mt-8">
                            <button type="submit"
                                class="rounded-md mb-8 bg-orange-400 dark:bg-indigo-500 px-3.5 py-2.5 text-center text-sm font-semibold dark:text-white shadow-2xs hover:bg-orange-500 dark:hover:bg-indigo-400 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
                                Send message
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </form>
</div>

</div>
