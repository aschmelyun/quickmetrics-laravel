# quickmetrics-laravel

This is a basic wrapper package for sending events to the [Quickmetrics](https://quickmetrics.io) API. It exposes a single class function, `qm()`, that you can use across your Laravel controllers, models, and views.

## Installation

Run `composer require aschmelyun/quickmetrics-laravel` from your Laravel application root. Once that's finished, you'll need to open up your `.env` file and add the following to the bottom:

```php
QUICKMETRICS_API_KEY={your-api-key}
```

*Optionally:* You can publish the config file from the package by running:

```bash
php artisan vendor:publish --provider="Larahawk\Watcher\LarahawkServiceProvider"
```

## Usage

To send a single event in your application, use `qm()->event(name, value, dimension)`. Name is a required string, value a required float, and dimension is an optional string that defaults to null.

You can also send batch events with `qm()->batch(items)`. See the [documentation on batching](https://app.quickmetrics.io/docs/send-events/batching) for more details about how your items array should be formatted.

## More Info

This package was developed as part of a video tutorial I've published on YouTube for getting started with Laravel package development. Check it out [here](https://www.youtube.com/watch?v=Hr8Zc2Zkcjg) if you want a behind-the-scenes look at how this was built.

If you have any questions, feel free to reach out to me on Twitter [@aschmelyun](https://twitter.com/aschmelyun).