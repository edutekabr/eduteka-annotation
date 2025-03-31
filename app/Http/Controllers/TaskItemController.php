<?php

namespace App\Http\Controllers;

use App\Models\TaskItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskItemController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, TaskItem $taskItem)
    {
        $validated = $request->validate([
            'content' => 'required|min:1|max:300',
            'task_id' => 'required|exists:tasks,id',
            'is_marked' => 'required|integer|between:1,2'
        ]);

        try{
            $taskItem = $taskItem->fill($validated);
            $taskItem->save();

            return redirect()->route('dashboard');
        } catch(\Exception $ex) {
            //$ex->getMessage();
            return "Ocorreu algum problema ao realizar a inserção!";
        }
    }
}
