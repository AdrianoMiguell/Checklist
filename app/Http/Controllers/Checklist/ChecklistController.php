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
            ],
            [
                'name' => ['required' => 'The name field is required. ', 'string|max:1000' => 'Shorten the name field further. '],
                'listDate' => ['required' => 'The date field is required. ']
            ]
        );

        $checklist = $request->except('token');
        $checklist['user_id'] = Auth::user()->id;
        $checklist = Checklist::create($checklist);

        return redirect()->route('dashboard')->with('status', 'New to-do list created successfully');
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
        return redirect()->route('dashboard')->with('status', 'To-do list updated successfully');
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

        return redirect()->route('dashboard')->with('status', 'To-do list deleted successfully');
    }

    public function view_dashboard()
    {
        $checklist = Checklist::Where('user_id', Auth::user()->id)
            ->orderBy('listDate', 'desc')
            ->get();
        return view('dashboard', compact('checklist'));
    }

    public function view_task(Request $request)
    {
        $checklist = Checklist::findOrFail($request->id);
        $all_checklists = Checklist::all();
        $tasks = Task::where('checklist_id', $request->id)
            ->orderBy('conclusion', 'asc')
            ->get();

        return view('checklist', compact('all_checklists', 'checklist', 'tasks'));
    }
}
