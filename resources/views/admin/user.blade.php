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
                                    <th scope="col">Пользователь</th>
                                    <th scope="col">Права Администратор</th>
                                    <th scope="col">Удалить</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>
                                            @if ($user->is_admin)
                                                <a href="{{route('admin.toggleAdmin', $user)}}"><button type="button" class="btn btn-danger">Разжаловать</button></a>
                                            @else
                                                <a href="{{route('admin.toggleAdmin', $user)}}"> <button type="button" class="btn btn-success">Повысить до Админа</button></a>
                                            @endif
                                        </td>
                                        <td>
                                            <form method="post" action="{{ route('admin.deleteUser', $user) }}"><button type="submit" class="btn btn-danger">X</button>
                                                @csrf
                                                @method('DELETE')
                                            </form>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        {{ $users->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


