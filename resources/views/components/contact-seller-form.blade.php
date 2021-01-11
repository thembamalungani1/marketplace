<div>
    <p class="my-2 text-gray-400 font-bold">Contact Seller</p>
    <form action="/" method="post" class="py-0">
        @csrf
        <input name="listing_slug" type="hidden" value="{{ $listing->slug }}">
        <x-form-input-box label="Full Name" name="fullname" id="fullname" placeholder="Full Name"></x-form-input-box>
        <x-form-input-box label="Email" name="contact_email" id="contact_email" placeholder="Email"></x-form-input-box>
        <x-form-input-box label="Phone" name="contact_phone" id="contact_email" placeholder="Contact Number"></x-form-input-box>
        <input type="submit" value="Send" class="button button--lg bg-light-1 text-white w-full xl:mr-3 my-4 py-2 shadow bg-green-400">
    </form>
</div>
