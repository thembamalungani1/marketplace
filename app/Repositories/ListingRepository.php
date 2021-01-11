<?php


namespace App\Repositories;


use App\Contracts\IListingRepository;
use App\Models\Listing;

class ListingRepository extends EloquentRepository implements IListingRepository
{
    public function __construct()
    {
        parent::__construct(app()->make(Listing::class));
    }
}
