<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Forex\ExchangeRatesApiIO;
use Illuminate\Http\JsonResponse;
use App\Forex\ExchangeRatesService;

class RateController extends Controller
{
    public function __invoke(ExchangeRatesService $exchangeRatesApiIO): JsonResponse
    {
        $rate = $exchangeRatesApiIO->getRate(
            request()->from,
            request()->to,
        );

        return response()->json(['rate' => $rate]);
    }
}
