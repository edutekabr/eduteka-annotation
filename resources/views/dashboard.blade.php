@extends('layouts.app')

@section('content')
    <section class="dash_pg">
        <div class="dash_header">
            <x-button class='btn_login' linkto='#' id="btn-create-annotation">
                Criar anotação
                <x-gmdi-edit-note-o />
            </x-button>
        </div>
    </section>

    <x-modal>
        <div class="modal_header">
            <h1>Criar anotação</h1>
            <x-vaadin-close id="close-modal" />
        </div>

        <div class="modal_content">
            <form method="POST" action="{{route('insert-account')}}">
                @csrf

                @error('title')
                    <p class="field_error">{{ $message }}</p>
                @enderror
                <input class="fullwidth" type="text" name="title" placeholder="Título" value="{{old('title')}}" class="@error('title') field_error @enderror"/>

                <x-button class='btn_fullwidth' linkto='insert-account'>Criar nova anotação</x-button>
            </form>
        </div>
    </x-modal>
@endsection

@push('scripts')
    <script>
        const btnCreateAnnotation = document.getElementById('btn-create-annotation')
        const boxModal = document.getElementById('box-modal')
        const closeModal = document.getElementById('close-modal')

        btnCreateAnnotation.addEventListener('click', (event) => {
            event.preventDefault();

            boxModal.classList.add('opened');
        })

        closeModal.addEventListener('click', (event) => {
            event.preventDefault();

            boxModal.classList.remove('opened');
        })
    </script>
@endpush
