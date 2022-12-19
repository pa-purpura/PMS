<label class="control-label">{{ ($attributes['label']) }}</label>
<input
type="radio"
    {{$attributes}}
    {{$attributes->merge(['class' => 'form-check-input'])}}
>
