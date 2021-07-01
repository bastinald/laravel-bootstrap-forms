# No Longer Maintained

Check out my new UI, Auth, & CRUD scaffolding package here: https://github.com/bastinald/laravel-livewire-ui

---

## Laravel Bootstrap Forms

Bootstrap 5 form components for Laravel.

## Installation

```console
composer require bastinald/laravel-bootstrap-forms
```

## Usage

An input field:

```html
<x-forms::input
    :label="__('Email')"
    type="email"
    error="email"
    wire:model.defer="email"/>
```

An input field with helper text & append/prepend slots:

```html
<x-forms::input
    :label="__('Price')"
    type="number"
    error="price"
    :help="__('Please enter the price.')"
    wire:model.defer="price">
    <x-slot name="prepend">$</x-slot>
    <x-slot name="append">.00</x-slot>
</x-forms::input>
```

A textarea field:

```html
<x-forms::textarea
    :label="__('Biography')"
    error="biography"
    wire:model.defer="biography"/>
```

A file upload field:

```html
<x-forms::file
    :label="__('Avatar')"
    error="avatar"
    wire:model.defer="avatar"/>
```

A select dropdown using Eloquent results:

```html
<x-forms::select
    :label="__('User ID')"
    :options="App\Models\User::pluck('name', 'id')->toArray()"
    error="user_id"
    wire:model.defer="user_id"/>
```

A select dropdown using an associative array:

```html
<x-forms::select
    :label="__('Color')"
    :options="['#ff0000' => 'Red', '#00ff00' => 'Green']"
    error="color"
    wire:model.defer="color"/>
```

A select dropdown using an indexed array:

```html
<x-forms::select
    :label="__('Color')"
    :options="['Red', 'Green']"
    error="color"
    wire:model.defer="color"/>
```

A radio group:

```html
<x-forms::radio
    :label="__('Color')"
    :options="['#ff0000' => 'Red', '#00ff00' => 'Green']"
    name="color"
    error="color"
    wire:model.defer="color"/>
```

A checkbox field:

```html
<x-forms::checkbox
    :label="__('I agree to the terms')"
    error="agree"
    wire:model.defer="agree"/>
```
