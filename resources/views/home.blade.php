@extends('layouts.app')

@section('content')
    <section class="home_pg">
        <h1 class="title">Que tal organizar sua rotina semanal <br>com nosso serviço de <span>anotações</span>?</h1>
        <p class="subtitle">Com nossa ferramenta, você vai poder criar, organizar e gerenciar <br>todas as tarefas do seu dia de forma totalmente gratuita.</p>
        <x-button class='btn_login' linkto='create-account'>Começar hoje mesmo!</x-button>
    </section>
@endsection
