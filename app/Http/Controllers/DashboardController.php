<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $tasks = Task::where('user_id', Auth::user()->id)
            ->with('taskItems')
            ->get();

        return view('dashboard', ['tasks' => $tasks]);
    }

}
