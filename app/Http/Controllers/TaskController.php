<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Task $task)
    {
        $validated = $request->validate([
            'title' => 'required|min:1|max:200'
        ]);

        try{
            $task = $task->fill($validated);
            $task->user_id = Auth::user()->id;
            $task->save();

            return redirect()->route('dashboard');
        } catch(\Exception $ex) {
            //$ex->getMessage();
            return "Ocorreu algum problema ao realizar a inserção!";
        }
    }
}
