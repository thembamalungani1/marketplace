<?php

namespace App\Http\Controllers;

use App\Contracts\IListingService;
use App\Http\Requests\CreateListingRequest;
use App\Models\Listing;
use Illuminate\Http\Request;

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
        $listing = $listingService->findBy('slug', $slug);

        if ($listing) {
            return view('pages.listing.show', ['listing' => $listing]);
        }

        return view('pages.misc.404', ['error', 'Listing not found']);
    }

    /**
     * @param IListingService $servicee
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function save(IListingService $service, CreateListingRequest $request)
    {
        $listing = $service->create($request->all());

        if ($listing) {
            return redirect()->route('show-listing', ['slug' => $listing->slug])->with('message', 'Listing successfully posted');
        }

        return redirect()->route('create-listing')->with('error', 'error while creating listing');
    }
}
