<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index() {

        $tasks = Task::all();

        return view('index', ['tasks' => $tasks]);
    }

    public function create(Request $request) {
        $validated = $request->validate([
            'name' => 'required',
        ]);

        Task::create([
            'name' => $validated["name"],
        ]);

        return redirect()
            ->route('task.index');
    }

    public function edit() {
    }

    public function delete(Request $request) {
        $validated = $request->validate([
            'id' => 'required',
        ]);

        Task::where('id', $validated['id'])
            ->delete();

        return redirect()
            ->route('task.index');
    }
}
