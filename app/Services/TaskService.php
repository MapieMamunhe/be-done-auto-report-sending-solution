<?php

namespace App\Services;


interface TaskService
{
    public function getTasks(): array;
    public function getTasksByDate($startDate, $endDate): array;
}
