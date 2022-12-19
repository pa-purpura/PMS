<x-layout>
    <div hidden>
        @if ( Request::url()==='http://127.0.0.1:8000/cars/create' )
        {{ $action='http://127.0.0.1:8000/cars'}}
        {{ $method = 'POST'}}
        @else
        {{ $method='PATCH'}}
        {{ $action='http://127.0.0.1:8000/cars/' . $car->id}}
        @endif
    </div>
    <div class="card mb-4 mt-4">
        <div class="card-header d-flex align-items-center justify-content-between">
            <div>
                @if ( Request::url()==='http://127.0.0.1:8000/cars/create' )
                <h5 class="mb-0">Crea Nuovo</h5>
                @else
                <h1><i class="fa fa-edit"></i> Modifica macchina</h1>
                @endif
            </div>

        </div>
        <div class="card-body">
            <x-form.form method={{$method}} action={{$action}}>
                <div class="row mb-3">
                    <div class="col-sm-12">
                        <x-form.inputs.input type="text" label="Brand" name="brand"
                            value="{{ old('brand', isset($car) ? $car->brand : '') }}">
                        </x-form.inputs.input>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-12">
                        <x-form.inputs.input type="text" label="Modello" name="model"
                            value="{{ old('model', isset($car) ? $car->model : '') }}">
                        </x-form.inputs.input>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-12">
                        <x-form.inputs.input type="date" label="Year" name="year"
                            value="{{ old('year', isset($car) ? $car->year : '') }}">
                        </x-form.inputs.input>
                    </div>
                </div>


            </x-form.form>
            <div class="mt-4">

                <div class="row mb-3">
                    <div class="col-sm-12">
                        <x-form.inputs.input class="form-check-input" type="radio" label="Radio" value="">
                        </x-form.inputs.input>

                        <x-form.inputs.input checked class="form-check-input" type="radio" label="Radio2" value="">
                        </x-form.inputs.input>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-12">
                        <x-form.inputs.input type="range" class="form-range" label="Input Range">
                        </x-form.inputs.input>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-12">
                        <x-form.inputs.input type="file" label="Multiple files" multiple>
                        </x-form.inputs.input>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-12">
                        <x-form.inputs.input type="number" label="Number">
                        </x-form.inputs.input>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-12">
                        <x-form.inputs.input type="checkbox" class="form-check-input" label="Checkboxes">
                        </x-form.inputs.input>
                    </div>
                </div>

                {{-- <div class="row mb-3">
                    <div class="col-sm-12">
                        <x-form.select :items="$drivers->toArray()" :model="$car" item_id="$car->driver->car_id">
                        </x-form.select>
                    </div>
                </div> --}}


                <div class="row mb-3">
                    <div class="col-sm-12">
                        <x-form.textarea label="Label TextArea">
                        </x-form.textarea>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-layout>
