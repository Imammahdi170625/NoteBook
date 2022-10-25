<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function showCreateTaskForm()
    {
        return view('create_task');
    }

    public function saveTask(Request $request)
    {
        $requiredData = $request->validate([
            'heading' => 'required|string',
            'description' => 'required',
            'end_time' => 'required',
        ]);

        Task::create([
            'heading' => $request->heading,
            'description' => $request->description,
            'deadline' => $request->end_time,
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('home');
    }

    public function deleteTask($id)
    {
        Task::destroy($id);

        return redirect()->route('home');
    }

    public function showTask($id)
    {
        $task = Task::findOrFail($id);

        return view('show_task', ['task' => $task]);
    }
}
