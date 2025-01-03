---
title: Using Alpine.js for a Disabled Button State in Forms  
excerpt: Learn how to use Alpine.js to disable a submit button until all form inputs are properly filled, enhancing form interactivity and usability.  
slug: alpine-disabled-button-state  
date: 2025-01-03  
category: alpine-js
image: prezet/images/alpine-disabled-button-state.jpg  
---

I wanted a submit button to remain disabled until all the inputs in the form were properly filled out. This ensures users can’t submit incomplete or invalid data, improving form usability and preventing unnecessary errors.

Plus I just thought it would be cool!

## Setting It Up

Using Alpine.js, I initialized state management for the form using the x-data directive on the parent container. This allowed me to track the state of each input. Here’s a mock of how I set it up:

<div x-data="{ title: '', description: '', category: '' }">
    <input type="text" placeholder="Title" x-model="title">
    <input type="text" placeholder="Description" x-model="description">
    <input type="text" placeholder="Category" x-model="category">
    <button :disabled="title.trim() === '' || description.trim() === '' || category.trim() === ''">
        Submit
    </button>
</div>

## How It Works
	1.	x-data Initialization
	•	The x-data object initializes title, description, and category as empty strings. These properties represent the inputs in the form.
	2.	x-model Binding
	•	Each input is bound to its corresponding property in the x-data object using x-model. For example, the title input updates the title property dynamically as the user types.
	3.	Conditional Button State
	•	The :disabled attribute on the button uses a conditional expression:

```php
title.trim() === '' || description.trim() === '' || category.trim() === ''
``` 

This checks if any of the fields are empty (or contain only whitespace). If so, the button remains disabled. The trim() method ensures blank spaces aren’t considered valid input.

	•	Simplicity: No additional libraries or complicated JavaScript code—just a few lines of Alpine.js.
	•	User Experience: Prevents users from submitting incomplete forms, reducing errors.
	•	Flexibility: The logic is easy to extend for more inputs or additional validation.

## The Result

This approach creates an interactive and user-friendly form, ensuring users only submit once all inputs are properly filled. It’s a small detail that enhances usability and prevents premature submissions.

Give it a try in your next project—it’s a slick and effective way to handle form interactivity with Alpine.js!