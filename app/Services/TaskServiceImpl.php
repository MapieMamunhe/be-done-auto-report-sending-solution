<?php

namespace App\Services;

use App\Services\TaskService;
use Oveleon\YouTrack\HttpClient\HttpClient;
use Oveleon\YouTrack\Client;

class TaskServiceImpl implements TaskService
{
    private Client $youtrack;
    public function __construct()
    {
        $token = config('app.youtrack.token');
        $url = config('app.youtrack.url');
        $httpClient = new HttpClient($url, $token);
        $this->youtrack = new Client($httpClient);
    }
    public function getTasks(): array
    {

        $issues = $this->youtrack->issues()->all();
        return $issues;
    }
    public function getTasksByDate($startDate, $endDate): array
    {
        return [];
    }
}
