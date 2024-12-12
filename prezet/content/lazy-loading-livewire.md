---
title: Lazy Loading with Livewire  
excerpt: Learn how to implement lazy loading in Laravel Livewire to enhance performance and user experience with placeholders and three simple techniques.  
slug: lazy-loading-livewire  
date: 2024-12-12  
category: laravel-livewire  
image: prezet/images/livewire-lazy-loading.jpg  
---

Lazy loading is a powerful technique to enhance the performance and user experience of your Laravel Livewire applications. By deferring the loading of resource-intensive content until it’s needed, lazy loading speeds up the initial page load and makes your app feel faster.

In this post, we’ll explore how to implement lazy loading in Livewire using three simple methods and enhance the user experience with placeholders.

### Implementing Lazy Loading

Livewire provides three straightforward ways to enable lazy loading in your application:

#### Using the ->lazy() Method

To enable lazy loading in your routes file, simply append the ->lazy() method to the route definition:

```php
Route::get('/dashboard', Dashboard::class)->lazy();
```

#### Adding the #[Lazy] Attribute in the Component Class

In your Livewire component class, you can annotate the top of the class with the #[Lazy] attribute:

```php
namespace App\Http\Livewire;

use Livewire\Attributes\Lazy;
use Livewire\Component;


#[Lazy]
class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.dashboard');
    }
}
```

#### Including lazy in the Component Render Tag

When rendering the component in your Blade file, you can add the lazy attribute directly to the component tag:

```php
<livewire:published-count lazy />
```

### Enhancing the Experience with Placeholders

While the content is being lazy-loaded, it’s a good idea to use placeholders to provide visual feedback to users. Placeholders communicate that the content is loading and will appear shortly, adding a polished touch to your UI.

Simply add a placeholder() method inside of the component you are lazy loading.

```php
namespace App\Http\Livewire;

use Livewire\Attributes\Lazy;
use Livewire\Component;


#[Lazy]
class Dashboard extends Component
{
    public function placeholder()
    {
        return view('livewire.placeholder', [
            'message' => 'Published count loading...'
        ]);
    }

    public function render()
    {
        return view('livewire.dashboard');
    }
}
```
### Why Lazy Loading Matters

Lazy loading is a great way to improve the perceived speed of your application. By deferring the loading of demanding resources, users can access essential content more quickly, enhancing their overall experience. This technique is particularly effective for applications with heavy or dynamic data.

By using one of these three methods and placeholders, you can make your Laravel Livewire applications faster, more efficient, and user-friendly. Implement lazy loading today and give your app the performance boost it deserves!