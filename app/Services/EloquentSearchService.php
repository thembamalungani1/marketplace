<?php


namespace App\Services;


use App\Contracts\ISearchService;
use App\Models\Listing;

class EloquentSearchService implements ISearchService
{

    public function search($criteria): mixed
    {
        $query = Listing::query();

        foreach ($criteria as $criterion) {
            $function = 'where';

            if(isset($criterion['function'])) {
                $function = $criterion['function'];
            }
            $query->$function($criterion['column'], $criterion['condition'], trim($criterion['value']));
        }

        return $query->orderBy('created_at', 'desc')->get();
    }
}
