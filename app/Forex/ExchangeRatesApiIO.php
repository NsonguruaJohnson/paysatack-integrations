<?php

namespace App\Forex;

use App\Forex\ExchangeRatesService;

class ExchangeRatesApiIO implements ExchangeRatesService
{
    public function getRate(string $from, string $to): float
    {
        // Make a call to the exchangeratesapi.io API here and fetch the exchange rate.

        return $rate;
    }
}
