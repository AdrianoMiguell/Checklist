<form action="{{ route('task.delete') }}" method="POST">
    @csrf
    @method('DELETE')
    <input type="hidden" name="id" value="{{ $t->id }}">
    <input type="hidden" name="checklist_id" value="{{ $checklist->id }}">
    <button type="submit" class="btnG btnG-light-green"
        onclick="return confirm('Tem certeza que deseja apagar essa task?')"><i class="bi bi-trash"></i></button>
</form>
