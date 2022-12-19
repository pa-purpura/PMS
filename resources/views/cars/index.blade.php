<x-layout>
    <div class="text-center">
        <a href="{{ route('cars.edit', 1) }}"><button class="btn btn-danger">Prova Edit</button> </a>
    </div>
    <x-table.table :headDatas="$headData" :array="$cars" :routeItems="$routeItem"></x-table>
</x-layout>
