<?php


namespace App\Repositories;


use App\Contracts\IRepository;
use Illuminate\Database\Eloquent\Model;

class EloquentRepository implements IRepository
{
    /**
     * EloquentRepository constructor.
     * @param Model $model
     */
    public function __construct(public Model $model){}

    public function create(array $values) : Model
    {
        return $this->model->create($values);
    }

    function where($column, $value, $operator = '='): Model
    {
        return $this->model->where($$column, $operator, $value)->get();
    }

    function findBy($column, $value, $operator): Model
    {
        return $this->model->where($column, $value, $operator)->first();
    }
}
