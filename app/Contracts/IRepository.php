<?php


namespace App\Contracts;


use Illuminate\Database\Eloquent\Model;

interface IRepository
{
    function create(array $values): Model;
    function where($column, $value, $operator): mixed;
    function findBy($column, $value, $operator): Model;
}
