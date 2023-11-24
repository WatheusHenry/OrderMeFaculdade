<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use \Illuminate\Support\Facades\Hash;

use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return response()->json(['tasks' => $tasks]);
    }

    public function store(Request $request)
    {
        $input = $request->all();

        $task = Task::create([
            'code' => $input['code'],
            'name' => $input['name'],
            'category' => $input['category'],
            'quantity' => $input['quantity'],
        ]);

        return response()->json(['task' => $task]);
    }

    public function show(Task $task)
    {
        return response()->json(['task' => $task]);
    }

    public function update(Request $request, Task $task)
    {
        $input = $request->all();

        $task->update([
            'code' => $input['code'],
            'name' => $input['name'],
            'category' => $input['category'],
            'quantity' => $input['quantity'],
        ]);

        return response()->json(['message' => 'Tarefa atualizada com sucesso']);
    }

    public function destroy(Task $task)
    {
        $task->delete();

        return response()->json(['message' => 'Tarefa excluída com sucesso']);
    }
}
