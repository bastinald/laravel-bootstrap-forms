@props(['label', 'options', 'empty' => true, 'error' => '', 'help'])

@php
    /** @var array $options */
    /** @var Illuminate\View\ComponentAttributeBag $attributes */
    /** @var Illuminate\Support\ViewErrorBag $errors */
    /** @var string $error */

    $id = uniqid();
    $options = Illuminate\Support\Arr::isAssoc($options) ? $options : array_combine($options, $options);

    $attributes = $attributes->class([
        'form-select',
        'is-invalid' => $errors->has($error),
    ])->merge([
        'id' => $id,
    ]);
@endphp

<div class="{{ isset($label) ? 'mb-3' : '' }}">
    @isset($label)
        <label for="{{ $id }}" class="form-label">{!! $label !!}</label>
    @endisset

    <select {{ $attributes }}>
        @if($empty)
            <option value=""></option>
        @endif

        @foreach($options as $value => $label)
            <option value="{{ $value }}">{{ $label }}</option>
        @endforeach
    </select>

    @error($error)
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror

    @isset($help)
        <div class="form-text">{!! $help !!}</div>
    @endisset
</div>
