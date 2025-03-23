---
title: Using Alpine and Tailwind for Easy Dark Mode Toggle
excerpt: Learn how to use Alpine.js to create a simple dark mode toggle.
slug: alpine-tailwind-dark-mode
date: 2025-03-28
category: alpine-js
image: prezet/images/alpine-tailwind-dark-mode.jpg  
---

Creating a dark mode toggle has never been easier thanks to Alpine.js and Tailwind CSS. This guide walks you through building one from scratch. 

## Prerequisites

Before diving in, ensure you have Alpine.js set up in your project.

👉 [Alpine.js Installation Guide](https://alpinejs.dev/essentials/installation)

Refer to their documentation for a fast and easy installation.

## How It Works

We’re going to:
1. Check if the user has a saved dark mode preference in `localStorage`
2. Fall back to the browser's default color scheme if no preference is set
3. Use Alpine.js to toggle dark mode and persist the choice
4. Style everything with Tailwind CSS

## Wiring Up Alpine.js

Once Alpine is ready, wire up the logic directly on the `<body>` tag:

```html
<body 
    x-data="{ 
        darkMode: localStorage.theme === 'dark' || (!localStorage.theme && window.matchMedia('(prefers-color-scheme: dark)').matches) 
    }" 
    x-init="$watch('darkMode', val => localStorage.theme = val ? 'dark' : 'light')" 
    :class="{ 'dark': darkMode }" class="font-sans antialiased bg-white dark:bg-black"
>
```

This setup ensures your site respects user preferences and remembers them between visits.

## Configuring Tailwind for Dark Mode

### Tailwind CSS v3
Add this to your `tailwind.config.js` file:

```js
darkMode: 'class'
```

### Tailwind CSS v4
With v4, dark mode is handled in your CSS instead:

```css
@custom-variant dark (&:is(.dark *));
```

This enables dark styles when `.dark` is present anywhere in the DOM tree.

## Creating the Toggle Button

Let’s build a reusable button that switches modes with a click:

```html
<button
    title="Toggle dark mode" 
    @click="darkMode = !darkMode"
    class="p-2 cursor-pointer text-neutral-600 hover:text-black dark:text-neutral-300 dark:hover:text-white"
>
    <svg x-show="darkMode" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" />
    </svg>
    <svg x-show="!darkMode" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M21.752 15.002A9.72 9.72 0 0 1 18 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 0 0 3 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 0 0 9.002-5.998Z" />
    </svg>
</button>
```

These SVG icons come from [Heroicons](https://heroicons.com/), providing a sun and moon icon for light and dark modes.

## Bonus Tips

- Extract the toggle into its own component if you're using a component-based framework.
- Place the button in your navbar for easy access.
- Animate the icon change for a smoother UX.

## Final Thoughts

That’s it! With just a bit of Alpine.js and Tailwind, you’ve built a fully functional, persistent dark mode toggle. 

Happy coding!!

