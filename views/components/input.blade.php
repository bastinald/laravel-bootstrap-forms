@props(['label', 'prepend', 'append', 'error' => '', 'help'])

@php
    /** @var Illuminate\View\ComponentAttributeBag $attributes */
    /** @var Illuminate\Support\ViewErrorBag $errors */
    /** @var string $error */

    $id = uniqid();
    $type = $attributes->get('type');

    if ($type == 'number') $inputmode = 'numeric';
    else if ($type == 'tel') $inputmode = 'tel';
    else if ($type == 'search') $inputmode = 'search';
    else if ($type == 'email') $inputmode = 'email';
    else if ($type == 'url') $inputmode = 'url';
    else $inputmode = 'text';

    $attributes = $attributes->class([
        'form-control',
        'is-invalid' => $errors->has($error),
        'rounded-end' => !isset($append),
    ])->merge([
        'id' => $id,
        'type' => $type,
        'inputmode' => $inputmode,
    ]);
@endphp

<div class="{{ isset($label) ? 'mb-3' : '' }}">
    @isset($label)
        <label for="{{ $id }}" class="form-label">{!! $label !!}</label>
    @endisset

    <div class="input-group">
        @isset($prepend)
            <span class="input-group-text">{!! $prepend !!}</span>
        @endisset

        <input {{ $attributes }}>

        @isset($append)
            <span class="input-group-text rounded-end">{!! $append !!}</span>
        @endisset

        @error($error)
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    @isset($help)
        <div class="form-text">{!! $help !!}</div>
    @endisset
</div>
