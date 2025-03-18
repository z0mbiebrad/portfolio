---
title: Livewire Dirty States  
excerpt: Discover how Livewire's dirty state tracking empowers developers to create dynamic and responsive forms in Laravel.  
slug: livewire-dirty-states  
date: 2024-12-09  
category: laravel-livewire  
image: prezet/images/livewire-dirty-states.jpg  
---

## What is a dirty state?

A dirty state is a term used to describe a form that has had its data altered in any way, usually during an edit.

Livewire’s dirty state tracking is a feature designed to make your forms smarter and more interactive. It allows you to detect changes in form inputs and respond dynamically, whether it’s updating the UI, enabling/disabling buttons, or highlighting modified fields.

In this post, we’ll explore the key capabilities of dirty state tracking, complete with examples to help you implement them in your projects.

## The Basics of Dirty State Tracking

Livewire can determine if a form input has been modified using directives like:  
	•	wire:dirty - Tracks if any property has changed.  
    •   wire:target="property" - Tracks a specific property for changes. (You still need wire:dirty attribute)  
	•	wire:dirty.class/attr="" - Dynamically add classes or attributes when an input is dirty.  
	•	wire:dirty.remove.class/attr - Dynamically remove classes or attributes when an input is dirty.  

## Examples in Action

Here’s how you can leverage dirty state tracking in a form:

#### Highlight Modified Field Titles  

```php
<label wire:dirty.class="text-orange-400" wire:target="form.title">  
    Title<span wire:dirty wire:target="form.title">*</span>  
</label>  
<input 
    type="text" 
    class="p-2 w-full border rounded-md bg-zinc-700 text-white"  
    wire:model="form.title"  
>
```

When the form.title property is modified, the label turns orange, and an asterisk appears to indicate the change.

#### Enable the Save Button

```php
<button  
    class="text-gray-200 p-2 bg-blue-700 rounded-sm disabled:opacity-75 disabled:bg-blue-300"  
    type="submit"  
    wire:dirty.class="hover:bg-blue-900"  
    wire:dirty.remove.attr="disabled"  
    disabled  
>  
    Save  
</button>  
```

This button stays disabled until any property in the form changes. Once dirty, the button’s hover effect is activated, and the disabled attribute is removed.

#### Toggle Additional Options

```php
<div wire:dirty.class="text-orange-400" wire:target="form.notifications">  
    Notification Options<span wire:dirty wire:target="form.notifications">*</span>  
</div>  
<div x-show="$wire.form.allowNotifications">  
    <label class="flex items-center">  
        <input type="checkbox" value="email" class="mr-2" wire:model="form.notifications">  
        Email  
    </label>  
    <label class="flex items-center">  
        <input type="checkbox" value="sms" class="mr-2" wire:model="form.notifications">  
        SMS  
    </label>  
    <label class="flex items-center">  
        <input type="checkbox" value="push" class="mr-2" wire:model="form.notifications">  
        Push  
    </label>  
</div>
```  

This snippet dynamically reveals additional notification options when the form.allowNotifications property is true and tracks any changes to the notification settings.

## Why Use wire:dirty?

Livewire’s dirty tracking streamlines your form-handling process, improving UX with features like:
	•	Real-time feedback on form changes.
	•	Dynamic attribute and class manipulation.
	•	Conditional logic based on input modifications.

Whether you’re building a simple form or a complex application, this feature makes your UI more intuitive and responsive.

Try it out in your next Livewire project and watch your forms come to life!