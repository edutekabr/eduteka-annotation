@extends('layouts.app')

@section('content')
    <section class="form_pg">
        <div class="form_left">
            <h1 class="title">Crie sua conta!</h1>
            <p class="subtitle">Criando sua conta você vai poder utilizar todos os recursos da plataforma de forma totalmente gratuita.</p>
        </div>

        <div class="form_right">
            <form method="POST" action="{{route('insert-account')}}">
                @csrf
                <input type="text" name="name" placeholder="Seu nome" value="{{old('name')}}" class="@error('name') field_error @enderror"/>
                @error('name')
                    <p>{{ $message }}</p>
                @enderror

                <input type="text" name="email" placeholder="Seu email" value="{{old('email')}}" />
                @error('email')
                    <p>{{ $message }}</p>
                @enderror

                <input type="password" name="password" placeholder="Sua senha" value="{{old('password')}}" />
                @error('password')
                    <p>{{ $message }}</p>
                @enderror

                <span>Já tem uma conta? <a href="{{route('login')}}">Entrar</a></span>

                <x-button class='btn_fullwidth' linkto='insert-account'>Criar nova conta</x-button>
            </form>
        </div>
    </section>
@endsection
