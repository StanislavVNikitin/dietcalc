@extends('layouts.app')

@section('title', 'Добавить продукт в диету')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h3> @if ($diets->id) {{__('Измение продукта в диете')}} @else {{__('Добавление продукта в диету')}} @endif </h3>
                        <form enctype="multipart/form-data" method="POST" action="@if (!$diets->id){{ route('diet.store') }}@else{{ route('diet.update', $diets) }}@endif">
                            @csrf
                            @if ($diets->id) @method('PATCH') @endif
                            <div class="form-group">
                                <label for="food">Продукт</label>
                                @if ($errors->has('food_id'))
                                    <div class="alert alert-danger" role="alert">
                                        @foreach ($errors->get('food_id') as $error)
                                            {{ $error }}
                                        @endforeach
                                    </div>
                                @endif
                                <select name="food_id" class="form-control" id="food">
                                    @forelse($foods as $item)
                                        <option
                                            @if ($item['id'] == old('food_id') || $item['id'] == $diets['food_id'] ) selected @endif
                                            value="{{ $item['id'] }}">{{ $item['foodProduct'] }}
                                        </option>
                                    @empty
                                        <h2>Нет продукта</h2>
                                    @endforelse
                                        <option value="579">Не существующий в Базе продукт</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="count">Количество в граммах.</label>
                                @if ($errors->has('count'))
                                    <div class="alert alert-danger" role="alert">
                                        @foreach ($errors->get('count') as $error)
                                            {{ $error }}
                                        @endforeach
                                    </div>
                                @endif
                                <input name="count" type="text" class="form-control" id="count" value="{{ $diets->count ?? old('count') }}">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control">
                                    @if ($diets->id) {{__('Изменить')}} @else {{__('Добавить')}} @endif
                                </button>

                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
