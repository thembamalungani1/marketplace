<div>
    <div class="mb-10">
        <x-search-form></x-search-form>
    </div>
    @foreach($results as $listing)
        <div class="w-full flex justify-center mb-3">
            <div class="w-3/4 flex justify-center mt-20 md:mt-0 bg">
                <div class="bg-gray-200 w-1/4 shadow-lg bg-opacity-95 border-gray-100 p-4">
                    <img src="https://via.placeholder.com/150">
                </div>
                <div class="bg-gray-200 w-3/4 shadow-lg opacity-95 border-gray-100 p-6">
                    <p class="text-2xl text-gray-600">
                        <a href="{{ route('show-listing', ['slug' => $listing->slug]) }}">{{ $listing->title }}</a>
                        <a class="float-right text-green-600"><span class="font-extrabold">{{ $listing->currency->acronym }}</span>{{ number_format(doubleval($listing->price), 2) }}</a>
                    </p>
                    <p class="text-gray-500 overscroll-x-contain break-words">{{ substr($listing->description, 0, 100) }}</p>
                    <p class="text-gray-500 overscroll-x-contain mt-2">
                        <a href="{{ route('search', ['category_id' => $listing->category->id]) }}">{{ $listing->category->name }}</a>
                    </p>
                    <div class="float-right">
                        <p class="text-red-400 align-bottom">{{ $listing->created_at->diffForHumans() }}</p>
                        <p class="text-blue-400 align-bottom"><a href="{{ route('show-listing', ['slug' => $listing->slug]) }}">Contact Seller</a></p>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
