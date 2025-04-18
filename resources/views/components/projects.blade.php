<div id="projects" class="pt-12 bg-zinc-100 dark:bg-zinc-900 sm:py-32">
    <div class="px-6 mx-auto max-w-7xl lg:px-8">
        <div class="max-w-2xl mx-auto lg:text-center">
            <h2 class="font-semibold text-orange-400 text-base/7 dark:text-indigo-400">
                Lets create together
            </h2>
            <p class="mt-2 text-4xl font-semibold tracking-tight text-pretty dark:text-white sm:text-5xl lg:text-balance">
                I love bringing ideas to life.
            </p>
            <p class="mt-6 text-gray-700 text-lg/8 dark:text-gray-300">
                Here are some of my favorite recent projects, check them out to see
                what you think!
            </p>
        </div>
        <div class="max-w-2xl mx-auto mt-16 sm:mt-20 lg:mt-24 lg:max-w-none">
            <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-3">
                <x-project-card>
                    <x-slot name="sitename">
                        Tasilisk
                    </x-slot>
                    <x-slot name="description">
                        A super simple and sleek task manager. Built it because I wanted a clean easy way to keep track of my daily "non-negotiables". A list of things I have to do everyday no matter how I feel. Want to soon incorporate teams and the ability to assign tasks to others, and notifications. 
                    </x-slot>
                    <x-slot name="website">
                        https://tasilisk.com
                    </x-slot>
                    <x-slot name="repository">
                        https://github.com/z0mbiebrad/task-bastion
                    </x-slot>
                </x-project-card>
                <x-project-card>
                    <x-slot name="sitename">
                        z0mbieblog
                    </x-slot>
                    <x-slot name="description">
                        This is my coding blog where I share things that I have learned on my coding journey. It features an admin page where I have the option to upload posts and images, and it takes advantage of markdown for posting, much like github. I update as much as time allows me!
                    </x-slot>
                    <x-slot name="website">
                        https://bradleytevans.com/blog
                    </x-slot>
                    <x-slot name="repository">
                        https://github.com/z0mbiebrad/portfolio
                    </x-slot>
                </x-project-card>
                <x-project-card>
                    <x-slot name="sitename">
                        Libri Search
                    </x-slot>
                    <x-slot name="description">
                        A passion project I made for my love of reading. It allows a user to search for any book, add it to lists (current, wishlist, finished). It also provides a link to the google Ebook for easy purchasing on a phone or tablet.
                    </x-slot>
                    <x-slot name="website">
                        https://librisearch.com
                    </x-slot>
                    <x-slot name="repository">
                        https://github.com/z0mbiebrad/libri
                    </x-slot>
                </x-project-card>
            </dl>
        </div>
    </div>
</div>
