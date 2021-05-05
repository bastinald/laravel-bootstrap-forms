@props(['label', 'options', 'error' => '', 'help'])

@php
    /** @var array $options */
    /** @var Illuminate\View\ComponentAttributeBag $attributes */
    /** @var Illuminate\Support\ViewErrorBag $errors */
    /** @var string $error */

    $id = uniqid();
    $options = Illuminate\Support\Arr::isAssoc($options) ? $options : array_combine($options, $options);

    $attributes = $attributes->class([
        'form-check-input',
        'is-invalid' => $errors->has($error),
    ])->merge([
        'type' => 'radio',
    ]);
@endphp

@foreach($options as $value => $label)
    <div class="form-check">
        <input {{ $attributes->merge(['id' => $id . '-' . $loop->index, 'value' => $value]) }}>

        <label for="{{ $id . '-' . $loop->index }}" class="form-check-label">{!! $label !!}</label>

        @if($loop->last)
            @error($error)
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror

            @isset($help)
                <div class="form-text">{!! $help !!}</div>
            @endisset
        @endif
    </div>
@endforeach
