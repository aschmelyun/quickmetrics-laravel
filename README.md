# quickmetrics-laravel

This is a basic wrapper package for sending events to the [Quickmetrics](https://quickmetrics.io) API. It exposes a single function, `qm()`, that you can use across your Laravel controllers, models, and views.

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

In your application, use `qm(name, value, dimension)` to send an event to your Quickmetrics dashboard. The description for the three parameters in this method are listed below:

### name

- Type: `string`
- Required: `true`
- Description: `The name of the metric being recorded`

### value

- Type: `float`
- Required: `true`
- Description: `The numeric/decimal value of the metric being recorded`

### dimension

- Type: `string`
- Required: `false`
- Description: `An associated identifier to be shown in connection with your metric value`

## More Info

This package was developed as part of a video tutorial I've published on YouTube for getting started with Laravel package development. Check it out [here](https://www.youtube.com/watch?v=Hr8Zc2Zkcjg) if you want a behind-the-scenes look at how this was built.

If you have any questions, feel free to reach out to me on Twitter [@aschmelyun](https://twitter.com/aschmelyun).