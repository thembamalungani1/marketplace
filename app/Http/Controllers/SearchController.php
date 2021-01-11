<?php

namespace App\Http\Controllers;

use App\Contracts\ISearchService;
use App\Helpers\SearchHelper;
use App\Http\Requests\SearchRequest;

class SearchController extends Controller
{
    public function search(ISearchService $searchService, SearchRequest $request, SearchHelper $helper)
    {
        $criteria = $helper->buildCriteria($request);

        if ($criteria) {
            $listings = $searchService->search($criteria);
            return view('pages.listing.search', ['results' => $listings]);
        }

        return view('pages.listing.search');
    }
}
