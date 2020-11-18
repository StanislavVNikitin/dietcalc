@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Таблица продуктов') }}</div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">Продукт</th>
                                    <th scope="col">Белки</th>
                                    <th scope="col">Жиры</th>
                                    <th scope="col">Угливоды</th>
                                    <th scope="col">Калорийность</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{ $i = 0 }}
                                @foreach ($foods as $food)
                                    <tr>
                                        <td  scope="row">{{ $i }}</td>
                                        <td>{{ $food["foodProduct"] }}</td>
                                        <td>{{ $food["foodProteins"] }}</td>
                                        <td>{{ $food["foodFats"] }}</td>
                                        <td>{{ $food["foodCarbohydrates"] }}</td>
                                        <td>{{ $food["foodCalories"] }}</td>
                                    </tr>
                                    {{ $i++ }}
                                @endforeach
                            </tbody>
                        </table>

                        {{ $foods->links() }}


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


