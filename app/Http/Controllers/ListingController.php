<?php

namespace App\Http\Controllers;

use App\Contracts\IListingService;
use App\Http\Controllers\Traits\UsesCategories;
use App\Http\Controllers\Traits\UsesCurrencies;
use App\Http\Requests\CreateListingRequest;
use App\Models\Listing;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use TypeError;

class ListingController extends Controller
{
    public function create()
    {
        return view('pages.listing.create');
    }

    public function index()
    {
        return view('pages.listing.search', ['latest' => Listing::all()]);
    }

    /**
     * @param string $slug
     * @param IListingService $listingService
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(string $slug, IListingService $listingService)
    {
       try {
           $listing = $listingService->findBy('slug', $slug);
           return view('pages.listing.show', ['listing' => $listing]);
       } catch (TypeError $e){
           return view('pages.misc.404', ['error', 'Listing not found']);
       }
    }

    /**
     * @param IListingService $service
     * @param CreateListingRequest $request
     * @return RedirectResponse
     */
    public function save(IListingService $service, CreateListingRequest $request)
    {
        $listing = $service->create($request->all());

        if ($listing) {
            return redirect()
                ->route('show-listing', ['slug' => $listing->slug])
                ->with('message', 'Listing successfully posted');
        }

        return redirect()
            ->route('create-listing')
            ->with('error', 'error while creating listing');
    }
}
