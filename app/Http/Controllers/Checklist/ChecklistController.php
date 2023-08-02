<?php

namespace App\Http\Controllers\Checklist;

use App\Http\Controllers\Controller;
use App\Models\Checklist;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class ChecklistController extends Controller
{

    public function create(Request $request)
    {

        $request->validate(
            [
                'name' => 'required|string|max:1000',
                'listDate' => 'required|date'
            ]
        );

        $checklist = $request->except('token');
        $checklist['user_id'] = Auth::user()->id;
        // dd($checklist);
        $checklist = Checklist::create($checklist);

        return redirect()->route('dashboard')->with('status', 'New to-do list');
    }

    public function edit(Request $request)
    {
        $request->validate(
            [
                'name' => 'required|string|max:80',
                'listDate' => 'required|after:date'
            ],
            [
                'after:date' => 'Data invalida'
            ]
        );

        $checklist = $request->except('token');

        $checklist_ago = Checklist::findOrFail($checklist['id']);
        $checklist_ago->update($checklist);
        return redirect()->route('dashboard')->with('status', 'To-do list updated');
    }

    public function delete(Request $request)
    {
        $request->validate(
            [
                'id' => 'required|integer'
            ]
        );

        $checklist = Checklist::findOrFail($request->id);

        $tasks = Task::where('checklist_id', $checklist->id)->get();

        if (isset($tasks) && count($tasks) > 0) {
            foreach ($tasks as $task) {
                $task->delete();
            }
        }

        $checklist->delete();

        return redirect()->route('dashboard')->with('status', 'To-do list deleted');
    }

    public function view()
    {
        $checklist = Checklist::Where('user_id', Auth::user()->id)
            ->orderBy('listDate', 'asc')
            ->get();
        return view('dashboard', compact('checklist'));
    }

    public function create_task(Request $request)
    {
        $checklist = Checklist::findOrFail($request->id);
        $tasks = Task::where('checklist_id', $request->id)
        ->orderBy('conclusion', 'desc')
        ->get();

        return view('checklist', compact('checklist', 'tasks'));
    }
}
