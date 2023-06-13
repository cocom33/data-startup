@props(['label', 'name', 'value', 'options', 'default', 'is_multiple' => false, 'wraperattribute' => true, 'option_values'])

<div
	@if ($wraperattribute)
		class="form-group mb-3 col-12 col-lg-6"
	@endif
>
  <label for="exampleFormControlSelect1">{{ $label }}</label>
  <select class="form-control form-select js-example-basic-multiple mt-1
		@error($name)
		    is-invalid
		@enderror"
		{{ $attributes }}
		id="exampleFormControlSelect1" name={{ $name }}>
        {{-- <option value="" class="d-none">Pilih Student...</option> --}}
		@isset($default)
    	    <option value="{{ $default['value'] }}" class="d-none" selected>{{ $default['label'] }}</option>
    	@else
    	   <option class="d-none">Pilih</option>
		@endisset
		@foreach (explode(",",$options) as $optionId => $optionName)
			<option
			    {{-- @if (!empty($option_values))
			        @foreach (explode(",",$option_values) as $id => $item)
                        @if ($id == $optionId)
                            value="{{ $item }}"
                        @endif
                    @endforeach
                @else
                @endif --}}
                value="{{ $optionName }}"

				@if((string)$optionId === (string)old($name, $value ?? null))
					selected
				@endif
			>
                {{ $optionName }}
			</option>
		@endforeach
  </select>

  <small class="form-text text-muted mt-1">Pilih salah satu.</small>
	@error($name)
		<span class="invalid-feedback">
			{{ $message }}
		</span>
	@enderror
</div>

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
	$(document).ready(function() {
		$('.js-example-basic-single').select2();
	});
</script>
