<?php

namespace App\Http\Controllers;

use App\Contracts\IListingService;
use App\Contracts\ISearchService;
use App\Http\Requests\CreateListingRequest;
use App\Http\Requests\SearchRequest;
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

    public function doSearch(ISearchService $searchService, SearchRequest $request)
    {
        $criteria = [];
        if ($request->input('category_id')) {
            $criteria = array_merge($criteria, [
                ['column' => 'category_id', 'condition' => '=', 'value' => $request->input('category_id')]
            ]);
        }
        if ($request->input('search')) {
            $criteria = array_merge($criteria, [
                ['column' => 'title', 'condition' => 'LIKE', 'value' => $request->input('search')]
            ]);
        }
        $listings = $searchService->search($criteria);

        return view('pages.listing.search', ['results' => $listings]);
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
