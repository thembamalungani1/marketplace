<?php


namespace App\Services;


use App\Contracts\ISearchService;
use App\Models\Listing;
use App\Models\User;

class EloquentSearchService implements ISearchService
{

    public function search($criteria): mixed
    {
        $query = Listing::query();

        foreach ($criteria as $criterion)
        {
            $query->where($criterion['column'], $criterion['condition'], $criterion['value']);
        }

        return $query->get();
    }
}
