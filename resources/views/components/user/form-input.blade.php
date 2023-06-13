@props(['label', 'name', 'value', 'placeholder' => '', 'type' => 'text', 'readonly', 'uppercase' => false , 'wraperattribute' => true, 'max'])

<div
  @if ($wraperattribute)
    class="col-12 col-lg-6 mb-3"
  @endif>
  <label for="defaultFormControlInput" class="form-label">{{ $label }}</label>
  <input
    {{ $attributes }}
    class="form-control @error($name)
      is-invalid
    @enderror"
    id="floatingInput"
    type={{ $type }}
    placeholder="{{ $placeholder }}"
    value="{{ old($name, $value ?? null) }}"
    @if ($type == 'number')
        min="0"
        max={{ $max ?? null }}
    @endif
    id="example-text-input"
    name="{{ $name }}"
    {{ $readonly ?? '' }}
    style="{{ $uppercase ? 'text-transform: uppercase' : '' }}"
  />

  @error($name)
    <div id="floatingInputHelp" class="form-text text-danger">
      {{ $message }}
    </div>
  @enderror
</div>
