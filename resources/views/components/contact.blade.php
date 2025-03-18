<div 
    x-data="{ open: {{ session('success') ? 'true' : 'false' }} }" 
    x-show="open"
    id="contact"
>
    @if (session('success'))
        <div class="alert alert-success">
            <div class="relative flex p-4 border-b border-zinc-300 bg-zinc-50 text-zinc-600 dark:border-zinc-700 dark:bg-zinc-900 dark:text-zinc-300">
                <p class="px-6 mx-auto text-md sm:text-lg text-pretty">
                    {{ session('success') }}
                </p>
                <button @click="open = false" class="absolute -translate-y-1/2 top-1/2 right-4" aria-label="dismiss banner">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" stroke="currentColor" fill="none" stroke-width="2.5" class="size-4 shrink-0">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
        </div>
    @endif
</div>
    <form action="{{ route('contact.store') }}" method="POST" class="px-6 pt-20 pb-24 sm:pb-32 lg:px-8 lg:py-48">
        @csrf
        <div class="relative isolate bg-zinc-100 dark:bg-zinc-900">
            <div class="grid grid-cols-1 mx-auto max-w-7xl lg:grid-cols-2">
                <div class="relative px-6 pt-24 pb-20 sm:pt-32 lg:static lg:px-8 lg:py-48">
                    <div class="mx-auto lg:mx-0 lg:max-w-lg">
                        <div
                            class="absolute inset-y-0 left-0 w-full overflow-hidden -z-10 ring-1 ring-white/5 lg:w-1/2">
                            <svg class="absolute inset-0 size-full stroke-gray-700 [mask-image:radial-gradient(100%_100%_at_top_right,white,transparent)]"
                                aria-hidden="true">
                                <defs>
                                    <pattern id="54f88622-e7f8-4f1d-aaf9-c2f5e46dd1f2" width="200" height="200"
                                        x="100%" y="-1" patternUnits="userSpaceOnUse">
                                        <path d="M130 200V.5M.5 .5H200" fill="none" />
                                    </pattern>
                                </defs>
                                <svg x="100%" y="-1" class="overflow-visible fill-gray-800/20">
                                    <path d="M-470.5 0h201v201h-201Z" stroke-width="0" />
                                </svg>
                                <rect width="100%" height="100%" stroke-width="0"
                                    fill="url(#54f88622-e7f8-4f1d-aaf9-c2f5e46dd1f2)" />
                            </svg>
                            <div class="absolute -left-56 top-[calc(100%-13rem)] transform-gpu blur-3xl lg:left-[max(-14rem,calc(100%-59rem))] lg:top-[calc(50%-7rem)]"
                                aria-hidden="true">
                                <div class="aspect-1155/678 w-[72.1875rem] bg-linear-to-br from-[#ffe5b4] to-[#ff8c00] dark:from-[#80caff] dark:to-[#4f46e5] opacity-20"
                                    style="clip-path: polygon(74.1% 56.1%, 100% 38.6%, 97.5% 73.3%, 85.5% 100%, 80.7% 98.2%, 72.5% 67.7%, 60.2% 37.8%, 52.4% 32.2%, 47.5% 41.9%, 45.2% 65.8%, 27.5% 23.5%, 0.1% 35.4%, 17.9% 0.1%, 27.6% 23.5%, 76.1% 2.6%, 74.1% 56.1%)">
                                </div>
                            </div>
                        </div>
                        <h2 class="text-4xl font-semibold tracking-tight text-pretty dark:text-white sm:text-5xl">Get in
                            touch
                        </h2>
                        <p class="mt-6 text-gray-700 text-lg/8 dark:text-gray-300">I would love to bring your idea to
                            life! Lets get in
                            contact!</p>
                        <dl class="mt-10 space-y-4 text-gray-700 text-base/7 dark:text-gray-300">
                            <div class="flex gap-x-4">
                                <dt class="flex-none">
                                    <span class="sr-only">Telephone</span>
                                    <svg class="w-6 text-black h-7 dark:text-gray-400" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                                        data-slot="icon">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                                    </svg>
                                </dt>
                                <dd><a class="dark:hover:text-white" href="tel:+1 (910) 420-0355">Call me!
                                        (910)-420-0355</a>
                                </dd>
                            </div>
                            <div class="flex gap-x-4">
                                <dt class="flex-none">
                                    <span class="sr-only">Email</span>
                                    <svg class="w-6 text-black h-7 dark:text-gray-400" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                                        data-slot="icon">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                                    </svg>
                                </dt>
                                <dd><a class="dark:hover:text-white" href="mailto:bradleyt.evans@gmail.com">Email
                                        me!</a></dd>
                            </div>
                        </dl>
                    </div>
                </div>
                <form action="#" method="POST" class="px-6 pt-20 pb-24 sm:pb-32 lg:px-8 lg:py-48">
                    <div class="w-4/5 mx-auto lg:mr-0 lg:max-w-lg">
                        <div class="flex flex-col my-8 gap-x-8 gap-y-6 sm:grid-cols-2">
                            <div class="sm:col-span-2">
                                <label 
                                    for="email"
                                    class="block font-semibold text-sm/6 dark:text-white"
                                    required
                                >
                                    Email
                                </label>
                                <div class="mt-2.5">
                                    <input 
                                        type="email" 
                                        name="email" 
                                        id="email" 
                                        autocomplete="email"
                                        required
                                        class="block w-full rounded-md border-0 dark:bg-white/5 px-3.5 py-2 dark:text-white shadow-2xs ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm/6"
                                    >
                                </div>
                            </div>
                            <div class="sm:col-span-2" x-data="{ message: '', error: '' }" >
                                <label for="phone-number" class="block font-semibold text-sm/6 dark:text-white">Phone
                                    number</label>
                                <div class="mt-2.5">
                                    <input 
                                        type="tel" 
                                        name="phone-number" 
                                        id="phone-number" 
                                        autocomplete="tel"
                                        minlength="9"
                                        maxlength="9"
                                        required
                                        class="block w-full rounded-md border-0 dark:bg-white/5 px-3.5 py-2 dark:text-white shadow-2xs ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm/6"
                                    >
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="message"
                                    class="block font-semibold text-sm/6 dark:text-white">Message</label>
                                <div class="mt-2.5">
                                    <textarea 
                                        name="message" 
                                        id="message" 
                                        rows="4"
                                        required
                                        class="block w-full rounded-md border-0 dark:bg-white/5 px-3.5 py-2 dark:text-white shadow-2xs ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm/6"
                                    ></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-end mt-8">
                            <button 
                                type="submit"
                                class="rounded-md bg-orange-400 dark:bg-indigo-500 px-3.5 py-2.5 text-center text-sm font-semibold dark:text-white shadow-2xs hover:bg-orange-500 dark:hover:bg-indigo-400 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500"
                            >
                                Send message
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </form>
</div>
