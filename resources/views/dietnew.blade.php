@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Диета') }}</div>

                    <div class="card-body">
                        <h2> В диету не давлен не один продукт!</h2>
                      <a href="{{ route('diet.create') }}"><button type="button" class="btn btn-success">Добавить продукт</button></a>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


