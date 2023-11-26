@if (isset($tasks) && $tasks->count() > 0)
    <form action="{{ route('task.delete_all') }}" method="POST">
        @csrf
        @method('DELETE')
        <input type="hidden" name="checklist_id" value="{{ $checklist->id }}">
        <button type="submit" class="btnG btnG-green d-flex align-items-center gap-1 btnG-growing-anim"
            onclick="return confirm('Tem certeza que deseja apagar todas as tarefas?')"><i class="bi bi-trash"
                style="font-size: 15pt;"></i>
            <span class="btnG-text text-truncate"> delete all </span>
        </button>
    </form>
@endif
