<div class="task" data-id="{{ $id }}">
    <div class="task_header">
        <h1>{{ $title }}</h1>

        <div class="task_actions">
            <x-microns-edit title="Alterar" />
            <x-far-trash-can title="Remover" />
        </div>
    </div>

    <div class="task_content">
        <div class="task_item">
            <input type="checkbox" name="is_marked" value="{{ $id }}" />
            <span>Café da Manhã</span>
        </div>
        <div class="task_item">
            <input type="checkbox" name="is_marked" value="{{ $id }}" checked />
            <span>Trabalhar</span>
        </div>
    </div>

    <div class="task_add">
        <x-fluentui-add-12 />
        <span>Adicionar Item</span>
    </div>
</div>
