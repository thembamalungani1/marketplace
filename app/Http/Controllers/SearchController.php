<?php

namespace App\Http\Controllers;

use App\Contracts\ISearchService;
use App\Http\Requests\SearchRequest;
use App\Models\Listing;

class SearchController extends Controller
{
    public function index()
    {
        return view('pages.listing.search', ['latest' => Listing::all()]);
    }

    public function search(ISearchService $searchService, SearchRequest $request)
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
}
