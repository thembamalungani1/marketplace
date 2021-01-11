@extends('layouts.main')
@section('content')
    <div>
        <div>
            <form action="{{ route('do-search') }}" method="post">
                @csrf
                <div>
                    <input name="search" placeholder="search listing">
                </div>
                <div>
                    @component('components.form-select-options', [
                            'label' => "Category",
                            'name'=>"category_id",
                            'id'=>"category_id",
                            'options' => [
                                ['label' => 'All', 'value' => 0],
                                ['label' => 'Cars', 'value' => 1],
                                ['label' => 'Furniture', 'value' => 2],
                            ]
                    ])
                    @endcomponent
                </div>
                <input type="submit" value="Search">
            </form>
        </div>
        <div>
            @isset($latest)
                <p>Latest listings</p>
                @component('components.listings-list-view', ['listings' => $latest])
                @endcomponent
            @endisset

            @isset($results)
                <p>Search results</p>
                @component('components.listings-list-view', ['listings' => $results])
                @endcomponent
            @endisset
        </div>
    </div>
@endsection
