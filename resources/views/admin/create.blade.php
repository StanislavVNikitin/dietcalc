@extends('layouts.app')

@section('title', 'Добавить продукт')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h3>Добавление продукта в базу продуктов.</h3>
                        <form enctype="multipart/form-data" method="POST" action="@if (!$foods->id){{ route('admin.foods.store') }}@else{{ route('admin.foods.update', $foods) }}@endif">
                            @csrf
                            @if ($foods->id) @method('PATCH') @endif

                            <div class="form-group">
                                <label for="foodProduct">Название продукта</label>
                                @if ($errors->has('foodProduct'))
                                    <div class="alert alert-danger" role="alert">
                                        @foreach ($errors->get('foodProduct') as $error)
                                            {{ $error }}
                                        @endforeach
                                    </div>
                                @endif
                                <input name="foodProduct" type="text" class="form-control" id="foodProduct" value="{{ $foods->foodProduct ?? old('foodProduct') }}">
                            </div>
                            <div class="form-group">
                                <label for="foodProteins">Белки в граммах на 100 грамм продукта</label>
                                @if ($errors->has('foodProteins'))
                                    <div class="alert alert-danger" role="alert">
                                        @foreach ($errors->get('foodProteins') as $error)
                                            {{ $error }}
                                        @endforeach
                                    </div>
                                @endif
                                <input name="foodProteins" type="text" class="form-control" id="foodProteins" value="{{ $foods->foodProteins ?? old('foodProteins') }}">
                            </div>
                            <div class="form-group">
                                <label for="foodFats">Жиры в граммах на 100 грамм продукта</label>
                                @if ($errors->has('foodFats'))
                                    <div class="alert alert-danger" role="alert">
                                        @foreach ($errors->get('foodFats') as $error)
                                            {{ $error }}
                                        @endforeach
                                    </div>
                                @endif
                                <input name="foodFats" type="text" class="form-control" id="foodFats" value="{{ $foods->foodFats ?? old('foodFats') }}">
                            </div>
                            <div class="form-group">
                                <label for="foodCarbohydrates">Углеводы в граммах на 100 грамм продукта</label>
                                @if ($errors->has('foodCarbohydrates'))
                                    <div class="alert alert-danger" role="alert">
                                        @foreach ($errors->get('foodCarbohydrates') as $error)
                                            {{ $error }}
                                        @endforeach
                                    </div>
                                @endif
                                <input name="foodCarbohydrates" type="text" class="form-control" id="foodCarbohydrates" value="{{ $foods->foodCarbohydrates ?? old('foodCarbohydrates') }}">
                            </div>
                            <div class="form-group">
                                <label for="foodCalories">Калорийность в КилоКалориях на 100 грамм продукта</label>
                                @if ($errors->has('foodCalories'))
                                    <div class="alert alert-danger" role="alert">
                                        @foreach ($errors->get('foodCalories') as $error)
                                            {{ $error }}
                                        @endforeach
                                    </div>
                                @endif
                                <input name="foodCalories" type="text" class="form-control" id="foodCalories" value="{{ $foods->foodCalories ?? old('foodCalories') }}">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control">
                                    @if ($foods->id) {{__('Изменить')}} @else {{__('Добавить')}} @endif
                                </button>

                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
