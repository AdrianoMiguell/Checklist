<?php

namespace App\Http\Controllers\Checklist;

use App\Http\Controllers\Controller;
use App\Models\Checklist;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{

    public function create(Request $request)
    {

        $request->validate([
            'description' => 'required'
        ]);

        $task = $request->except('token');
        $task['conclusion'] = false;

        $id = $request['checklist_id'];

        Task::create($task);

        return redirect()->route('task.create', ['id' => $id]);
    }

    public function task_status(Request $request)
    {
        $id = $request['id'];
        $task_id = $request['task_id'];
        $task = Task::find($task_id);
        // dd($request);

        if (isset($request['status']) && $request['status'] == 'on') {
            $task->conclusion = true;
            $task->save();
        } else {
            $task->conclusion = false;
            $task->save();
        }

        return redirect()->route('task.create', ['id' => $id]);
    }


    public function task_edit(Request $request)
    {
        $request->validate(
            [
                'description' => 'required|string|max:250',
            ]
        );

        $task = $request->except('token');

        $task_ago = Task::findOrFail($task['id']);
        $task_ago['conclusion'] = false;
        $task_ago->update($task);
        return redirect()->route('task.create', ['id' => $task['checklist_id']])->with('status', 'Task updated');
    }

    public function task_delete(Request $request)
    {
        $request->validate(
            [
                'id' => 'required|integer',
                'checklist_id' => 'required|integer'
            ]
        );

        $task = Task::findOrFail($request->id);
        $task->delete();
        $id = $request->checklist_id;

        return redirect()->route('task.create', ['id' => $id])->with('status', 'Task deleted');
    }
}
