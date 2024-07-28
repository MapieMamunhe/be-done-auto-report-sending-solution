<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\TaskService;

class TasksController extends Controller
{
    private TaskService $taskService;

    public function __construct(TaskService $taskService)
    {
        $this->taskService = $taskService;
    }
    //

    function getTasks(Request $request)
    {
        $tasks = $this->taskService->getTasks();
        return response()->json($tasks);
    }
}
