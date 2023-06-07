<?php

namespace App\Providers;

use Exception;
use App\Forex\FixerIO;
use App\Forex\ExchangeRatesApiIO;
use App\Forex\ExchangeRatesService;
use Illuminate\Support\ServiceProvider;

class ExchangeRatesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register(): void
    {
        // $this->app->bind(ExchangeRatesService::class, ExchangeRatesApiIO::class);

        $this->app->bind(ExchangeRatesService::class, function ($app) {
            if (config('services.exchange-rates-driver') === 'exchangeratesapiio') {
                return new ExchangeRatesApiIO();
            }

            if (config('services.exchange-rates-driver') === 'fixerio') {
                return new FixerIO();
            }

            throw new Exception('The exchange rates driver is invalid.');
        });

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
