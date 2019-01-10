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

    public function getBySubject($subject){
        /**
         * Procura tarefa por assunto.
         */
        $subject = '%' . $subject . '%';

        return DB::table($this->table)
                ->where('subject', 'like', $subject)
                ->get();
    }
}