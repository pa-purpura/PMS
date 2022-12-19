
<label class="control-label">{{ ($attributes['label']) }}</label>
<input
    {{$attributes}}
    {{$attributes->merge(['class' => 'form-control'])}}
>
@error(($attributes['name']))
<div class="alert alert-danger w-50 mt-2">{{ $message }}</div>
@enderror

