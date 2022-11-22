@extends('layouts.sistema')
@section('content')

@guest
<div class="divLoginOrRegister">
    <h1>Faça o Login ou Cadastre-se GRATIS</h1>
    <div class="divLogin">
        <form method="POST" action="{{ route('login') }}">
            @csrf
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>

                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
        </form>
    </div>
    <div class="divRegister">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            <x-jet-button class="ml-4">
                {{ __('Register') }}
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
            <a href="{{ route('logout') }}" onclick="event.preventDefault();this.closest('form').submit();"><ion-icon name="exit"></ion-icon> Sair</a>
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