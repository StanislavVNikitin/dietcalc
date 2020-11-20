@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Профиль пользователя</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('updateProfile') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Имя пользователя</label>
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ $user->name }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ $user->email }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="weight" class="col-md-4 col-form-label text-md-right">Вес в кг</label>
                                <div class="col-md-6">
                                    <input id="weight" type="weight" class="form-control" name="weight" value="{{ $user->weight }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Текущий пароль</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="newPassword" class="col-md-4 col-form-label text-md-right">Новый пароль</label>

                                <div class="col-md-6">
                                    <input id="newPassword" type="password" class="form-control" name="newPassword">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="newPasswordConfirm" class="col-md-4 col-form-label text-md-right">Подтверждение нового пароля</label>

                                <div class="col-md-6">
                                    <input id="newPasswordConfirm" type="password" class="form-control" name="newPasswordConfirm">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Изменить
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


