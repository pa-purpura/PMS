<label class="control-label">{{ ($attributes['label']) }}</label>

<textarea {{ $attributes }}
    {{$attributes->merge(['class' => 'form-control'])}}
    >{{ $slot }}</textarea>


