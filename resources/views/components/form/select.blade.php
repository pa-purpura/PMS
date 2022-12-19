@props([
        'items' => '',
        'model' => '',
        'item_id' => '',
        'value' => '',
    ])

<label class="control-label">{{ ($attributes['label']) }}</label>
<select {{$attributes}} {{$attributes->merge(['class' => 'form-select'])}}>
    @foreach ($items as $item)
    <option @if (isset($model)) value="{{ old($item_id, $item->id) }}" @selected($model->$item_id == $item->id)
        @else
        value="{{ $item->id }}" @endif>
        {{ $item->$value }}
    </option>
    @endforeach
</select>

{{-- @foreach ($roles as $role)
        <option
            @if (isset($athlete)) value="{{ old('role_id', $role->id) }}"
                @selected($athlete->role_id == $role->id)
                @else
                value="{{ $role->id }}" @endif>
            {{ $role->name }}
        </option>
    @endforeach --}}
