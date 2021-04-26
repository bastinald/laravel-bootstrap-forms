@props(['label', 'error' => '', 'help'])

@php
    /** @var Illuminate\View\ComponentAttributeBag $attributes */
    /** @var Illuminate\Support\ViewErrorBag $errors */
    /** @var string $error */

    $id = uniqid();

    $attributes = $attributes->class([
        'form-check-input',
        'is-invalid' => $errors->has($error),
    ])->merge([
        'id' => $id,
        'type' => 'checkbox',
    ]);
@endphp

<div class="form-check">
    <input {{ $attributes }}>

    <label for="{{ $id }}" class="form-check-label">{!! $label !!}</label>

    @error($error)
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror

    @isset($help)
        <div class="form-text">{!! $help !!}</div>
    @endisset
</div>
