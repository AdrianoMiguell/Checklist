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
        ], [
            'description' => ['required' => 'Provide a description of your task']
        ]);

        $task = $request->except('token');
        $task['conclusion'] = false;

        $id = $request['checklist_id'];

        Task::create($task);

        return redirect()->route('task.view', ['id' => $id])->with('status', 'New Task created');
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

        return redirect()->route('task.view', ['id' => $id]);
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
        $checklist_id_ago = $task_ago['checklist_id'];
        $task_ago['conclusion'] = false;

        $task_ago->update($task);
        return redirect()->route('task.view', ['id' => $checklist_id_ago])->with('status', 'Task updated');
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

        return redirect()->route('task.view', ['id' => $id])->with('status', 'Task deleted');
    }

    public function task_import(Request $request)
    {

        $request->validate([
            '*description' => 'required|string'
        ]);

        $id = $request['checklist_id'];

        $listTasks = explode("\n", $request['description']);

        $request['conclusion'] = false;

        foreach ($listTasks as $task) {
            if (!empty(trim($task))) {
                print(trim($task));
                $request['description'] = trim($task);
                print(" \t Description: " . trim($task));
                $taskToCreate = $request->except('token');
                Task::create($taskToCreate);
            }
        }

        return redirect()->route('task.view', ['id' => $id])->with('status', 'List of tasks created successfully');
    }

    public function task_delete_all(Request $request)
    {

        $id = $request->checklist_id;

        $tasks = Task::where('checklist_id', $request['checklist_id'])->get();

        foreach ($tasks as $task) {
            $task->delete();
        }

        return redirect()->route('task.view', ['id' => $id])->with('status', 'Tasks deleted successfully');
    }
}
