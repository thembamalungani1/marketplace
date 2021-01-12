# MarketPlace
This is a simple classifieds website with rudementary functionality. Currency the app support below listed functionality:

- Registering of a new account
- Logging in with a registered account
- Viewing listings already created by other users
- Searching listing by title and allow filtering by category and currency
- Viewing a single listing details


## Running the project
The project requires a database which can be configured under `.env` file.

#### Running migrations

```console
$ php artisan migrate --seed
```

We do require the seeding for `Currencies` and `Categories

#### Running the app locally
```console
$ php artisan serve
```

If everything worked fine, you should have a running app with pages as in `examples` folder
