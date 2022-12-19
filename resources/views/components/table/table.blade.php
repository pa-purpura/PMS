<table class="table">
    <thead>
        <tr>
            @foreach ($headDatas as $data)
            <th>{{ $data }}</th>
            @endforeach
            <th colspan="2">Azioni</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($array as $key => $item)
        <x-table.row :item="$item" :routeItems="$routeItems"></x-row>
        @endforeach
    </tbody>
</table>
