@php
    /* @var string $body */
    /* @var array $nav */
    /* @var array $headings */
    /* @var \BenBjurstrom\Prezet\Data\FrontmatterData $frontmatter */
@endphp

<x-prezet::template>
    @seo([
        'title' => $frontmatter->title,
        'description' => $frontmatter->excerpt,
        'url' => route('prezet.show', ['slug' => $frontmatter->slug]),
        'image' => $frontmatter->image,
    ])
    <div class="py-6 text-base font-medium leading-6">
        <a
            class="text-primary-500 hover:text-primary-600"
            aria-label='Read more: "Release of Tailwind Nextjs Starter Blog v2.0"'
            href="{{ url()->previous() }}"
        >
            ← Back
        </a>
    </div>

    {{-- Left Sidebar --}}
    <x-slot name="left">
        <x-prezet::sidebar :nav="$nav" />
    </x-slot>

    {{-- Main Content --}}
    <article>
        <header class="space-y-1 mb-9">
            <p class="text-sm font-medium font-display text-primary-600">
                {{ $frontmatter->category }}
            </p>
            <h1
                class="text-4xl font-medium tracking-tight text-gray-900 font-display dark:text-white"
            >
                {{ $frontmatter->title }}
            </h1>
        </header>
        <div
            class="prose dark:prose-invert dark:prose-pre:bg-zinc-800 dark:prose-pre:text-white prose-code:text-white prose-code:bg-zinc-700 prose-headings:font-display prose-zinc max-w-none prose-a:border-b prose-a:border-dashed prose-a:border-black/30 prose-a:font-semibold prose-a:no-underline prose-a:hover:border-solid prose-img:rounded-sm"
        >
            {!! $body !!}
        </div>
    </article>

    {{-- Right Sidebar --}}
    <x-slot name="right">
        <div
            class="hidden xl:sticky xl:top-[4.75rem] xl:-mr-6 xl:block xl:h-[calc(100vh-4.75rem)] xl:flex-none xl:overflow-y-auto xl:py-16 xl:pr-6"
        >
            <nav aria-labelledby="on-this-page-title" class="w-56">
                <p
                    id="on-this-page-title"
                    class="text-sm font-medium text-gray-900 font-display dark:text-gray-100"
                >
                    On this page
                </p>
                <ol role="list" class="mt-4 space-y-3 text-sm">
                    @foreach ($headings as $h2)
                        <li class="dark:text-white">
                            <a
                                href="#{{ $h2['id'] }}"
                                :class="{'text-primary-500 hover:text-primary-500': activeHeading === '#{{ $h2['title'] }}'}"
                                x-on:click.prevent="scrollToHeading('{{ $h2['id'] }}')"
                                class="transition-colors"
                            >
                                {{ $h2['title'] }}
                            </a>

                            @if ($h2['children'])
                                <ol
                                    role="list"
                                    class="pl-5 mt-2 space-y-3 border-l"
                                >
                                    @foreach ($h2['children'] as $h3)
                                        <li>
                                            <a
                                                href="#{{ $h3['id'] }}"
                                                :class="{'text-primary-700 hover:text-primary-700': activeHeading === '#{{ $h3['title'] }}'}"
                                                x-on:click.prevent="scrollToHeading('{{ $h3['id'] }}')"
                                                class="transition-colors"
                                            >
                                                {{ $h3['title'] }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ol>
                            @endif
                        </li>
                    @endforeach
                </ol>
            </nav>
        </div>
    </x-slot>
</x-prezet::template>
