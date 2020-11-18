@extends('layouts.app')

@section('title', 'Добавить продукт')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">

                        <form enctype="multipart/form-data" method="POST" action="@if (!$foods->id){{ route('admin.foods.store') }}@else{{ route('admin.foods.update', $foods) }}@endif">
                            @csrf
                            @if ($foods->id) @method('PATCH') @endif

                            <div class="form-group">
                                <label for="foodProduct">Название продукта</label>
                                <input name="foodProduct" type="text" class="form-control" id="foodProduct" value="{{ $foods->foodProduct ?? old('foodProduct') }}">
                            </div>
                            <div class="form-group">
                                <label for="foodProteins">Белки</label>
                                <input name="foodProteins" type="text" class="form-control" id="foodProteins" value="{{ $foods->foodProteins ?? old('foodProteins') }}">
                            </div>
                            <div class="form-group">
                                <label for="foodFats">Жиры</label>
                                <input name="foodFats" type="text" class="form-control" id="foodFats" value="{{ $foods->foodFats ?? old('foodFats') }}">
                            </div>
                            <div class="form-group">
                                <label for="foodCarbohydrates">Углеводы</label>
                                <input name="foodCarbohydrates" type="text" class="form-control" id="foodCarbohydrates" value="{{ $foods->foodCarbohydrates ?? old('foodCarbohydrates') }}">
                            </div>
                            <div class="form-group">
                                <label for="foodCalories">Калорийность</label>
                                <input name="foodCalories" type="text" class="form-control" id="foodCalories" value="{{ $foods->foodCalories ?? old('foodCalories') }}">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control">
                                    @if ($foods->id) Изменить @else Добавить @endif
                                </button>

                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
