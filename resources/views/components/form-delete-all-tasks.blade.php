@if (isset($tasks) && $tasks->count() > 0)
    <form action="{{ route('task.delete_all') }}" method="POST">
        @csrf
        @method('DELETE')
        <input type="hidden" name="checklist_id" value="{{ $checklist->id }}">
        <button type="submit" class="btnG btnG-green rounded-circle"
            onclick="return confirm('Tem certeza que deseja enviar o formulário?')"><i class="bi bi-trash"
                style="font-size: 16pt;"></i></button>
    </form>
@endif
