@extends('layouts.app')
@extends('layouts.base')

@section('welcome')
        <!-- Шоукейс аля большой приветственный экран -->
        <div class="header-showcase container">
            <div class="header-showcase-text">
                <h1 class="header-showcase-text-title">Вход в личный кабинет</h1>
                <p class="header-showcase-text-descr">Для входа в свой личный кабинет введите адрес электронной почты и пароль. Далее нажмите кнопку ВОЙТИ.
                    <br> Если у вас нет логина и пароля для входа в личный кабинет, то вы можете это сделать нажав <a
                        href="{{asset('/register')}}">ЗАРЕГИСТРИРОВАТЬСЯ</a>.
                </p>
            </div>
            <div class="header-showcase-link">
                <div class="header-showcase-link-image">
                    <img src="{{asset('/public/img/header-images/navigation-showcase/navig-showcase-image.png')}}"
                        alt="Showcase Image">
                </div>
                <div class="header-showcase-link-icons">
                    <ul class="ul-header-showcase-icons">
                        <li><a href="#"><img
                                    src="{{asset('/public/img/header-images/navigation-showcase/sosial-media-icons/Telegram-icon.png')}}"
                                    alt="Telegram icon"></a></li>
                        <li><a href="#" target="_blank"><img
                                    src="{{asset('/public/img/header-images/navigation-showcase/sosial-media-icons/GitHub-icon.png')}}"
                                    alt="GitHub icon"></a></li>
                        <li><a href="#"><img
                                    src="{{asset('/public/img/header-images/navigation-showcase/sosial-media-icons/Vkontakte-icon.png')}}"
                                    alt="Vkontakte icon"></a></li>
                        <li><a href="#" target="_blank"><img
                                    src="{{asset('/public/img/header-images/navigation-showcase/sosial-media-icons/Instagram-icon.png')}}"
                                    alt="Instagram icon"></a></li>
                    </ul>
                </div>
            </div>
        </div>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
               <!-- <div class="card-header">{{ __('Login') }}</div> -->

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Адрес электронной почты') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Пароль') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Запомнить') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('ВОЙТИ') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Забыли пароль?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
