<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(
    ): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $tasks = Task::latest()->paginate(10);
        return view('welcome', ['tasks' => $tasks]);
    }

    public function create(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('tasks.create');
    }

    public function store(Request $request
    ): \Illuminate\Foundation\Application|\Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse|\Illuminate\Contracts\Foundation\Application {


        $formFields = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'due_date' => 'required',
            'priority' => 'required',
        ]);

        Task::create($formFields);

        return redirect('/')->with('message', 'Task Created!');
    }


    public function show(Task $task): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('tasks.show', [
            //  whatever is put here needs to be the same in the "/{name}" in web.php
            'task' => $task
        ]);
    }
}
