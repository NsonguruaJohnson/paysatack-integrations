<?php

namespace App\Forex;

class FixerIO implements ExchangeRatesService
{
    public function getRate(string $from, string $to): float
    {
        // Make a call to the Fixer API here and fetch the exchange rate.

        return $rate;
    }
}
