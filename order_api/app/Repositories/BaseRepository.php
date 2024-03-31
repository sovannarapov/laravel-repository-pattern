<?php

namespace App\Repositories;

use App\Interfaces\BaseRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class BaseRepository implements BaseRepositoryInterface
{
    protected Model $model;

    public function __construct(
        Model $model
    ) {
        $this->model = $model;
    }

    public function find(int $id)
    {
        return $this->model->find($id);
    }
}
