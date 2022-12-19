<tr>
    @foreach ($item as $key2 => $value)
    <x-table.cell :value="$value"></x-cell>
    @endforeach
    <td><a href="{{route($routeItems . '.edit', $item['id'])}}"><button class="btn btn-secondary"
                type="button">Modifica</button></a></td>
    <td>
    <td>
        <x-buttons.delete-form method="post" action="{{route($routeItems . '.destroy', $item['id'])}}" />
    </td>
</tr>
