@pushOnce('styles')
    <link href="{{asset('css/task.css')}}" rel="stylesheet" />
@endPushOnce

<div class="task" data-task-id="{{ $id }}">
    <div class="task_header">
        <h1>{{ $title }}</h1>

        <div class="task_actions">
            <x-microns-edit title="Alterar" />
            <x-far-trash-can title="Remover" />
        </div>
    </div>

    <div class="task_content">
        <div class="task_item">
            <input type="checkbox" name="is_marked" value="" />
            <span>Café da Manhã</span>
        </div>
        <div class="task_item">
            <input type="checkbox" name="is_marked" value="" checked />
            <span>Trabalhar</span>
        </div>
    </div>

    <button class="task_add">
        <x-fluentui-add-12 />
        <span>Adicionar Item</span>
    </button>
</div>
