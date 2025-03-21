@extends('layouts.app')

@section('content')
    <section class="form_pg">
        <div class="form_left">
            <h1 class="title">Fazer login!</h1>
            <p class="subtitle">Acesse nossa plataforma para gerenciar a sua rotina semanal.</p>
        </div>

        <div class="form_right">
            <form method="POST" action="{{route('auth')}}">
                @csrf
                <input type="text" name="email" value="suporte@eduteka.com.br" placeholder="Email" />
                <input type="password" name="password" value="$eNh4#123" placeholder="Senha" />

                <span><a href="{{route('forgot-password')}}">Esqueceu sua senha?</a></span>

                <x-button class='btn_fullwidth' linkto='auth'>
                    Logar
                    <x-simpleline-login />
                </x-button>

                @if (session('status'))
                    <span class="txt_error">{{ session('status') }}</span>
                @endif
            </form>
        </div>
    </section>
@endsection
