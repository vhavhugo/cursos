<?php

namespace App\Repositories\Implementations;

use App\Project;
use App\Repositories\Base\EloquentRepository;
use App\Repositories\Interfaces\ProjectRepositoryInterface;

class EloquentProjectRepository extends EloquentRepository implements ProjectRepositoryInterface{
    
    /**
     *
     * @param Project $project
     */
    public function __construct(Project $project){
        $this->model = $project;
    }
    
    /**
     * Nome da tabela
     *
     * @var string
     */

    public function getBySubject($subject){
        /**
         * Procura tarefa por assunto.
         */
        $subject = '%' . $subject . '%';

        return $this->model
                ->where('subject', 'like', $subject)
                ->get();
    }
}