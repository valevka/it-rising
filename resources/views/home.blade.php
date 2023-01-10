@extends('layouts.app')
@extends('layouts.base')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Приветствуем Вас!') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Вы успешно вошли в свой личный кабинет!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
