<?php

namespace App\Repositories\Base;

use DB;

abstract class QueryBuilderRepository implements RepositoryInterface
{
    protected $table;

    /**
     * Retorna lista paginada
     *
     * @param integer $page
     * @return void
     */
    public function getAll(int $page = 10)
    {
        return DB::table($this->table)->paginete($page);
    }

    /**
     * Retorna registro
     *
     * @param integer $id
     * @return void
     */
    public function find(int $id)
    {
        return DB::table($this->table)->where('id', $id)->first();
    }

    /**
     * Criar registro de array de dados
     *
     * @param array $data
     * @return void
     */
    public function create(array $data)
    {
        return DB::table($this->table)->insert($data);
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
        return DB::table($this->table)->where('id', $id)->update($data);
    }

    /**
     * Apaga um registro no banco
     *
     * @param integer $id
     * @return void
     */
    public function delete(int $id)
    {
        return DB::table($this->table)->where('id', $id)->delete();
    }
}