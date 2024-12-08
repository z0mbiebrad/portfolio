---
title: Understanding wire:model in Laravel Livewire  
excerpt: Explore how to use the wire:model directive in Laravel Livewire to create dynamic and interactive applications with two-way data binding.  
slug: understanding-wire-model-laravel-livewire  
date: 2024-12-07  
category: laravel-livewire  
image: prezet/images/wire-model-example.jpg  
---

## What is wire:model?

wire:model is a Livewire directive that establishes a two-way data binding between your front-end and back-end. When the user changes the value in an input field, the corresponding property in the Livewire component is updated automatically. Similarly, if the property in the component is updated programmatically, the change is reflected in the input field.

## Define the Property in the Class

```php
class CreatePost extends Component
{
    public $title = '';
 
    public $content = '';
 
    public function save()
    {
        $post = Post::create([
            'title' => $this->title
            'content' => $this->content
        ]);
    }
}
```

Here, we’ve added a public property $title, which we’ll bind to an input field using wire:model.

## Adding wire:model in the view

Now, edit the blog-post-editor.blade.php file:

```php
<form wire:submit="save">
    <label>
        <span>Title</span>
 
        <input type="text" wire:model="title"> 
    </label>
 
    <label>
        <span>Content</span>
 
        <textarea wire:model="content"></textarea> 
    </label>
 
    <button type="submit">Save</button>
</form>
```
Because both inputs use wire:model, their values will be synchronized with the server's properties when the "Save" button is pressed.

And thats it! Now you have successfully set up two way data binding! Its as simple as declaring your property in your class, and adding wire:model="property" in the view.

Isn't livewire awesome!

## All available modifiers
.live  
Send updates as a user types  

.blur  
Only send updates on the blur event  

.change  
Only send updates on the the change event  

.lazy  
An alias for .change  

.debounce.[?]ms  
Debounce the sending of updates by the specified millisecond delay  

.throttle.[?]ms  
Throttle network request updates by the specified millisecond interval  

.number  
Cast the text value of an input to int on the server  

.boolean  
Cast the text value of an input to bool on the server  

.fill  
Use the initial value provided by a "value" HTML attribute on page-load  