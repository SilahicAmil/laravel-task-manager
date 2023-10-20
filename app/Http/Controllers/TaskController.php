<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(
    ): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $tasks = Task::latest()->paginate(5);
        return view('welcome', ['tasks' => $tasks]);
    }

    public function create(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('tasks.create');
    }

    public function store(Request $request
    ): \Illuminate\Foundation\Application|\Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse|\Illuminate\Contracts\Foundation\Application {
        // Store Task Data Here
//        dd($request);
        //     Need to add Alpine Js or something similiar
        return redirect('/')->with('message', "Task Created!");
    }
}
