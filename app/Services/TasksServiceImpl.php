<?php

namespace App\Services;

use App\Models\Task;
use App\Services\TaskService;

class TaskServiceImpl implements TaskService
{
    public function getTasks(): array
    {

        return [];
    }
    public function getTasksByDate($startDate, $endDate): array
    {
        return [];
    }
}
