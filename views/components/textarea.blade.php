@props(['label', 'error' => '', 'help'])

@php
    /** @var Illuminate\View\ComponentAttributeBag $attributes */
    /** @var Illuminate\Support\ViewErrorBag $errors */
    /** @var string $error */

    $id = uniqid();

    $attributes = $attributes->class([
        'form-control',
        'is-invalid' => $errors->has($error),
    ])->merge([
        'id' => $id,
        'rows' => 3,
    ]);
@endphp

<div class="{{ isset($label) ? 'mb-3' : '' }}">
    @isset($label)
        <label for="{{ $id }}" class="form-label">{!! $label !!}</label>
    @endisset

    <textarea {{ $attributes }}></textarea>

    @error($error)
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror

    @isset($help)
        <div class="form-text">{!! $help !!}</div>
    @endisset
</div>
