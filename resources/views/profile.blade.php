@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Диета') }}</div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Продукт</th>
                                    <th scope="col">Количество в граммах</th>
                                    <th scope="col">Белки</th>
                                    <th scope="col">Жиры</th>
                                    <th scope="col">Углероды</th>
                                    <th scope="col">Калорийность</th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($diets as $diet)
                                    <tr>
                                        <td>{{ $diet["foodProduct"] }}</td>
                                        <td>{{ $diet["count"] }}</td>
                                        <td>
                                            {{ $diet["foodProteins"] * $diet["count"] / 100 }}
                                        </td>
                                        <td>{{ $diet["foodFats"]  * $diet["count"] / 100}}</td>
                                        <td>{{ $diet["foodCarbohydrates"] * $diet["count"] / 100 }}</td>
                                        <td>{{ $diet["foodCalories"]  * $diet["count"] / 100 }}</td>

                                        <td><a href="{{ route('diet.edit', $diet) }}"><button type="button" class="btn btn-success">U</button></a></td>
                                        <td>
                                            <form method="post" action="{{ route('diet.destroy', $diet) }}"><button type="submit" class="btn btn-danger">X</button>
                                            @csrf
                                            @method('DELETE')
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                <tr>
                                    <td>Сумма</td>
                                    <td></td>
                                    <td>{{ $sumdiet['dietProteins'] }}</td>
                                    <td>{{ $sumdiet['dietFats'] }}</td>
                                    <td>{{ $sumdiet['dietCarbohydrates']  }}</td>
                                    <td>{{ $sumdiet['dietCalories'] }}</td>
                                    <td colspan="2"><a href="{{ route('diet.create') }}"><button type="button" class="btn btn-success">Добавить</button></a></td>
                                </tr>
                            </tbody>
                        </table>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


