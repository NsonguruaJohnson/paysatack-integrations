<?php

namespace App\Forex;

interface ExchangeRatesService
{
    public function getRate(string $from, string $to): float;
}
