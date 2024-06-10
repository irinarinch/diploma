@extends('layouts.app')

@section('login')  
    <section class="login">
        <header class="login__header">
            <h2 class="login__title">Авторизация</h2>
        </header>
        <div class="login__wrapper">
            <form class="login__form" method="POST" accept-charset="utf-8">
                @csrf
                <label class="login__label" for="email">
                    E-mail
                    <input class="login__input" type="email" placeholder="example@domain.xyz" name="email" required>
                </label>
                <label class="login__label" for="pwd">
                    Пароль
                    <input class="login__input" type="password" placeholder="" name="password" required>
                </label>
                <div class="text-center">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="text-center">           
                    <input value="Авторизоваться" type="submit" class="login__button">
                </div>
            </form>
        </div>
    </section>
@endsection
