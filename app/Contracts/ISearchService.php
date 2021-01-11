<?php


namespace App\Contracts;


interface ISearchService
{
    function search($criteria): mixed;
}
