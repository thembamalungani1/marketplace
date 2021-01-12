<?php


namespace App\Helpers;


use Illuminate\Http\Request;

class SearchCriteriaBuilder
{
    public function buildFrom(Request $request)
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
                ['column' => 'title', 'condition' => 'LIKE', 'value' => '%'.$request->input('search').'%'],
                ['column' => 'description', 'condition' => 'LIKE', 'value' => '%'.$request->input('search').'%', 'function' => 'orWhere']
            ]);
        }

        return $criteria;
    }
}
