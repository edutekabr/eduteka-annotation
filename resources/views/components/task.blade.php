@pushOnce('styles')
    <link href="{{asset('css/task.css')}}" rel="stylesheet" />
@endPushOnce

<div class="task" data-id="{{ $id }}">
    <div class="task_header">
        <h1>{{ $title }}</h1>

        <div class="task_actions">
            <x-microns-edit title="Alterar" />
            <x-far-trash-can title="Remover" />
        </div>
    </div>

    <div class="task_content">
        {{ $slot }}
    </div>

    <button class="task_add">
        <x-fluentui-add-12 />
        <span>Adicionar Item</span>
    </button>
</div>

<x-modal id="box-modal-task-item" taskid="{{ $id }}">
    <div class="modal_header">
        <h1>Adicionar item</h1>
        <x-vaadin-close id="close-modal-task-item" />
    </div>

    <div class="modal_content">
        <form method="POST" action="{{route('store-task-item')}}">
            @csrf

            @error('content')
                <p class="field_error">{{ $message }}</p>
            @enderror
            <input class="fullwidth" type="text" name="content" placeholder="Item" value="{{old('content')}}" class="@error('content') field_error @enderror"/>

            <input type="hidden" name="task_id" value="{{ $id }}" />
            <input type="hidden" name="is_marked" value="{{ App\Models\TaskItem::IS_NOT_MARKED }}" />

            <x-button class='btn_fullwidth' linkto='store-task-item'>Criar novo item</x-button>
        </form>
    </div>
</x-modal>

@pushOnce('scripts')
    <script>
        const btnsAddItems = document.querySelectorAll('.task_add');
        const iconsCloseModal = document.querySelectorAll('#close-modal-task-item');

        btnsAddItems.forEach(btnAddIt => {
            btnAddIt.addEventListener('click', (event) => {
                event.preventDefault();

                const taskId = btnAddIt.parentNode.dataset.id;
                const modal = document.querySelector(`[data-task-id='${taskId}']`)
                modal.classList.add('opened');
            })
        });

        iconsCloseModal.forEach(icCloseMod => {
            icCloseMod.addEventListener('click', (event) => {
                event.preventDefault();

                const modal = icCloseMod.parentNode.parentNode.parentNode;
                modal.classList.remove('opened');
            })
        });
    </script>
@endPushOnce
