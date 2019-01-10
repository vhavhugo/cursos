<?php

namespace App\Repositories\Implementations;

use App\Repositories\Base\QueryBuilderRepository;
use App\Repositories\Interfaces\ProjectRepositoryInterface;

class ProjectRepository extends QueryBuilderRepository implements ProjectRepositoryInterface{
    /**
     * Nome da tabela
     *
     * @var string
     */
    protected $table = 'projects';

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