<div>
    @foreach($listings as $listing)
        @component('components.listings-list-item', ['listing' => $listing])
        @endcomponent
    @endforeach
</div>
