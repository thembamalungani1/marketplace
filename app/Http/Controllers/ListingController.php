<?php

namespace App\Http\Controllers;

use App\Contracts\IListingService;
use App\Http\Requests\CreateListingRequest;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function index()
    {
        return view('pages.listing.create');
    }

    /**
     * @param IListingService $service
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function save(IListingService $service, CreateListingRequest $request)
    {
        $listing = $service->create($request->all());

        if ($listing) {
            return redirect()->route('create-listing')->with('message', 'Success');
        }

        return redirect()->route('create-listing')->with('error', 'error while creating listing');
    }
}
