<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $pendingTasks = Auth::user()->tasks()->where('status', '=', 'pending')->get();

        return view('task', ['tasks' => $pendingTasks]);
    }

    public function getExecutedTasks()
    {
        $executedTasks = Auth::user()->tasks()->where('status', '=', 'executed')->get();
        return view('task', ['tasks' => $executedTasks]);
    }

    public function getExpiredTasks()
    {
        $expiredTasks = Auth::user()->tasks()->where('status', '=', 'expired')->get();
        return view('task', ['tasks' => $expiredTasks]);
    }
}
