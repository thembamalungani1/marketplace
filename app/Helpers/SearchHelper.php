<?php


namespace App\Helpers;


use Illuminate\Http\Request;

class SearchHelper
{
    public function buildCriteria(Request $request)
    {
        $criteria = [];

        if ($request->input('category_id')) {
            $criteria = array_merge($criteria, [
                ['column' => 'category_id', 'condition' => '=', 'value' => $request->input('category_id')]
            ]);
        }

        if ($request->input('currency_id')) {
            $criteria = array_merge($criteria, [
                ['column' => 'currency_id', 'condition' => '=', 'value' => $request->input('currency_id')]
            ]);
        }

        if ($request->input('search')) {
            $criteria = array_merge($criteria, [
                ['column' => 'title', 'condition' => 'LIKE', 'value' => $request->input('search')]
            ]);
        }

        return $criteria;
    }
}
