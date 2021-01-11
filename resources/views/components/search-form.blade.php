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
                        'options' => $categories
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
                        'options' => $currencies
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
