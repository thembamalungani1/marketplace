<div>
    <form action="{{ route('search') }}" method="post">
        @csrf
        <div class="flex p-4 pb-0 m-4 bg-gray-200 bg-opacity-70 border-l shadow-lg">
            <div class="w-1/4 bg-opacity-100">
                <div class="block">
                    @component('components.form-select-options', [
                        'label' => "",
                        'name'=>"category_id",
                        'id'=>"category_id",
                        'options' => [
                            ['label' => 'Category', 'value' => 0],
                            ['label' => 'Cars', 'value' => 1],
                            ['label' => 'Furniture', 'value' => 2],
                        ]
                    ])
                    @endcomponent
                </div>
            </div>
            <div class="w-1/4 ml-2">
                <div class="mb-4">
                    @component('components.form-select-options', [
                        'label' => "",
                        'name'=>"currency_id",
                        'id'=>"currency_id",
                        'options' => [
                            ['label' => 'Currency', 'value' => 0],
                            ['label' => 'USD', 'value' => 1],
                            ['label' => 'ZAR', 'value' => 2],
                        ]
                    ])
                    @endcomponent
                </div>
            </div>
            <div class="w-3/4 my-2 mx-2">
                <x-form-input-box label="Search" name="search" class="py-20" id="search" placeholder="Search"></x-form-input-box>
            </div>
            <div class="w-1/6">
                <input type="submit" value="Search" class="text-white w-full my-2 py-1.5 shadow bg-green-400 shadow">
            </div>
        </div>
    </form>
</div>
