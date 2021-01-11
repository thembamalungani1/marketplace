<?php


namespace App\Services;


use App\Contracts\IListingRepository;
use App\Contracts\IListingService;
use App\Events\ListingWasCreated;
use App\Models\Listing;

class ListingService implements IListingService
{

    /**
     * ListingService constructor.
     * @param IListingRepository $repository
     */
    public function __construct(public IListingRepository $repository){}

    public function create(array $details): Listing
    {
        $details = array_merge($details, ['user_id' => auth()->user()->id]);
        $listing = $this->repository->create($details);

        if ($listing) {
            event(new ListingWasCreated($listing));
        }

        return $listing;
    }

    public function findBy($field, $value, $criteria = '='): Listing
    {
        return $this->repository->findBy($field, $value, $criteria);
    }
}
