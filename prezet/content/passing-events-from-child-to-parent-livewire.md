---
title: Passing Events from Child to Parent in Laravel Livewire
excerpt: Learn how to communicate between Livewire components using event dispatching for cleaner, more modular code!
slug: passing-events-from-child-to-parent-livewire
date: 2024-12-04
category: laravel-livewire
image: prezet/images/livewire-events.jpg
---

Laravel Livewire makes it incredibly easy to build dynamic, interactive web applications without the need for heavy front-end frameworks. One of the most useful features in Livewire is its ability to pass events from child components to parent components using the dispatch() method. Let’s dive into how it works and see some practical examples.

## Dispatching Events from Child to Parent

Imagine you have a child component that needs to notify its parent component when a button is clicked. Using the dispatch() method, you can emit an event from the child and have it handled by the parent.

Here’s an example:

Child Component

Inside your child component, you can define a method that triggers the event using dispatch():

```php
public function triggerParentMethod()
{
   dispatch('parent:method');
}
```

You can bind this to a button click in your Blade view:

```php
<button wire:click="triggerParentMethod">Notify Parent</button>
```

You can also inline it directly into the view for a more concise approach. 

```php
<button wire:click="dispatch('parent:method');">Notify Parent</button>
```

## Listening for the Event in the Parent

In the parent component, you can “listen” for the event by adding the #[On()] attribute above the method you want to execute:

```php
#[On('parent:method')]
public function handleChildEvent()
{
    $this->message = "The child triggered this method!";
}
```
Voila!
This allows the parent to respond directly when the child emits the event.

## Using AlpineJS for Event Dispatch

If you’re using AlpineJS in your project, you can also trigger Livewire events directly from your HTML. Here’s how you can do it:

```html
<button x-data x-on:click="dispatch('parent:method')">Trigger Parent via AlpineJS</button>
```

This is a handy way to integrate JavaScript-driven interactivity with Livewire’s server-side functionality.

## Conclusion

With Livewire’s event system, passing data and actions between child and parent components is straightforward and efficient. Wether your using Livewire or AlpineJS for triggering events, dispatch() will help you build robust, dynamic interactions while keeping your codebase maintainable.

Give it a try in your next Laravel project, and see how it simplifies communication between components!