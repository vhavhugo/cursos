<?php

namespace App\Repositories\Base;

abstract class EloquentRepository implements RepositoryInterface
{
    protected $model;

    /**
     * Retorna lista paginada
     *
     * @param integer $page
     * @return void
     */
    public function getAll(int $page = 10)
    {
        return $this->model->paginate(10);
    }

    /**
     * Retorna registro
     *
     * @param integer $id
     * @return void
     */
    public function find(int $id)
    {
        return $this->model->find($id);
    }

    /**
     * Criar registro de array de dados
     *
     * @param array $data
     * @return void
     */
    public function create(array $data)
    {
        return $this->model->insert($data);
    }

    /**
     * Atualiza um registro no banco
     *
     * @param integer $id
     * @param array $data
     * @return void
     */
    public function update(int $id, array $data)
    {
        $instance = $this->model->find($id);
        if(!$instance){
            return false;
        }
        return $instance->update($data);
    }

    /**
     * Apaga um registro no banco
     *
     * @param integer $id
     * @return void
     */
    public function delete(int $id)
    {
        $instance = $this->model->find($id);

        if(!$instance){
            return false;
        }
        return $instance->delete();
    }
}