<div>
    <div>
        <img src="">
        <div>
            <p>{{ $listing->title }}</p>
            <a href="{{ route('show-listing', ['slug' => $listing->slug]) }}">More Details</a>
        </div>
    </div>
</div>
