<?php


namespace App\Contracts;


use App\Models\Listing;

interface IListingService
{
    function create(array $details) : Listing;
    function findBy($field, $value, $criteria = '='): Listing;
}
