@extends('layouts.app')

@section('title', 'Добавить продукт в диету')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">

                        <form enctype="multipart/form-data" method="POST" action="@if (!$diets->id){{ route('diet.store') }}@else{{ route('diet.update', $diets) }}@endif">
                            @csrf
                            @if ($diets->id) @method('PATCH') @endif
                            <div class="form-group">
                                <label for="food">Продукт</label>
                                <select name="food_id" class="form-control" id="food">
                                    @forelse($foods as $item)
                                        <option
                                            @if ($item['id'] == old('foodProduct') || $item['id'] == $diets['food_id'] ) selected @endif
                                            value="{{ $item['id'] }}">{{ $item['foodProduct'] }}
                                        </option>
                                    @empty
                                        <h2>Нет продуктов</h2>
                                    @endforelse

                                </select>
                            </div>
                            <div class="form-group">
                                <input name="count" type="text" class="form-control" id="count" value="{{ $diets->count ?? old('count') }}">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control">
                                    @if ($diets->id) Изменить @else Добавить @endif
                                </button>

                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
