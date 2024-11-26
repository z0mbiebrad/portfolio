---
title: Manipulate Laravel Data with Javascript
excerpt: Check out how easy it is to work with laravel data with javascript!
slug: manipulate-laravel-data-with-javascript
date: 2024-11-15
category: javascript
image: prezet/images/javascript.jpg
---

And heres what I mean by that. Once you have successfully passed data, lets say for example your Posts::all(), to your blade view, like so.

```php
$posts  = Posts::all();
return view('posts.edit', compact('posts'));
```

Then inside your blade view, at the bottom open a script and pass that data to JavaScript using JSON!

```php
<script>
   const userId = {{ auth()->id() }};
   const postsData = @json($posts);
   const filteredPosts = postsData.filter(posts => posts.user_id == userId);
   console.log(filteredPosts)
</script>
```

And voila! Just like that, you have your data ready to be used in JavaScript!
As you can see I just added a simple filter that only shows Posts that i've made, and added a console log to check them out!
Pretty cool stuff!