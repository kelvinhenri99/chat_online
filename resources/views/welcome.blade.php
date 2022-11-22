@extends('layouts.sistema')
@section('content')

@guest
<div class="divLoginOrRegister">
    <h1>Faça o Login ou Cadastre-se GRATIS</h1>
    <div class="divLogin">
        <h1>Login</h1>
        <form method="POST" action="{{ route('login') }}">
            @csrf
                <label for="email" class="labelLoginOrRegister">E-mail</label>
                <x-jet-input id="email" class="inputLoginOrRegister" type="email" name="email" :value="old('email')" required autofocus />
                <label for="password" class="labelLoginOrRegister">Senha</label>
                <x-jet-input id="password" class="inputLoginOrRegister" type="password" name="password" required autocomplete="current-password" />
                <label for="remember_me" class="checkLoginOrRegister">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span>{{ __('Remember me') }}</span>
                </label>

                @if (Route::has('password.request'))
                    <a class="checkLoginOrRegister" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="inputSubmit">
                    {{ __('Entrar') }}
                </x-jet-button>
        </form>
    </div>
    <div class="divRegister">
        <h1>Cadastre-se</h1>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <label for="name" class="labelLoginOrRegister">Seu nome</label>
            <x-jet-input id="name" class="inputLoginOrRegister" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <label for="email" class="labelLoginOrRegister">E-mail</label>
            <x-jet-input id="email" class="inputLoginOrRegister" type="email" name="email" :value="old('email')" required />
            <label for="password" class="labelLoginOrRegister">Senha</label>
            <x-jet-input id="password" class="inputLoginOrRegister" type="password" name="password" required autocomplete="new-password" />
            <label for="password_confirmation" class="labelLoginOrRegister">Confirme a senha</label>
            <x-jet-input id="password_confirmation" class="inputLoginOrRegister" type="password" name="password_confirmation" required autocomplete="new-password" />
            <x-jet-button class="inputSubmit">
                {{ __('Cadastrar') }}
            </x-jet-button>
        </form>
    </div>
</div>
@endguest

@auth
    <div class="divMenu">
        <a href="#"><ion-icon name="chatbubble-ellipses"></ion-icon> CHAT</a>
        <a href="#"><ion-icon name="build"></ion-icon> Configurações</a>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <a href="{{ route('logout') }}" id="logout" onclick="event.preventDefault();this.closest('form').submit();"><ion-icon name="exit"></ion-icon> Sair</a>
        </form>
    </div>
@endauth

<div class="divLinha"></div>

<div class="divApresentacao">
    <h1>Conheça esse Projeto</h1>
    <p>Um CHAT Online com inspiração no Whats-App, desenvolvido por Kelvin Henrique Ferreira. Sistema feito em PHP mais preciso com Laravel, projeto está aberto para publico lá no github para visualização e/ou alterações de qualqueis tipo. Se gostou desse projeto, de uma estrela la no github!</p>
</div>

<div class="divLinha"></div>

<div class="divRedeSocial">
    <h1>Redes Sociais</h1>
    <a href="https://api.whatsapp.com/send?phone=5511948441622&text=Ol%C3%A1" target="_blank"><div class="whatsapp"></div></a>
    <a href="https://www.linkedin.com/in/kelvin-henrique-ferreira-55b0b3200/" target="_blank"><div class="linkedin"></div></a>
    <a href="https://github.com/kelvinhenri99/chat_online" target="_blank"><div class="github"></div></a>
</div>

@endsection