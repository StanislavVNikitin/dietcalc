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
                                    <th scope="col-8">Продукт</th>
                                    <th scope="col-2">Редактировать</th>
                                    <th scope="col-2">Удалить</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($foods as $food)
                                    <tr>
                                        <td>{{ $food["foodProduct"] }}</td>
                                        <td><a href="{{ route('admin.foods.edit', $food) }}"><button type="button" class="btn btn-success">Изменить</button></a></td>
                                        <td>
                                            <form method="post" action="{{ route('admin.foods.destroy', $food) }}"><button type="submit" class="btn btn-danger">Удалить</button>
                                            @csrf
                                            @method('DELETE')
                                            </form>
                                        </td>
                                    </tr>
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


