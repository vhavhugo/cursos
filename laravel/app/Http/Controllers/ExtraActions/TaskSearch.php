<?php

namespace App\Http\Controllers\ExtraActions;

use App\Http\Controllers\Controller;
use App\Repository\Interfaces\TaskRepositoryInterface;

class TaskSearch extends Controller{
    /**
     * 
     */
    public function __invoke(TaskRepositoryInterface $taskRepository, $subject){
        return $taskRepository->getBySubject($subject);
    }
}