<?php

namespace App\Repositories\Implementations;

use App\Repositories\Base\QueryBuilderRepository;
use App\Repositories\Interfaces\TaskRepositoryInterface;

class TaskRepository extends QueryBuilderRepository implements TaskRepositoryInterface{
    /**
     * Nome da tabela
     *
     * @var string
     */
    protected $table = 'tasks';
}