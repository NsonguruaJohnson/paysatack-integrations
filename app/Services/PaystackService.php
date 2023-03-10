<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class PaystackService
{
    protected string $baseUrl;

    protected string $privateKey;

    public function __construct()
    {
        $this->baseUrl();
        $this->privateKey();
    }

    public function makePayment($request)
    {
        $response = Http::acceptJson()
            ->withToken($this->privateKey)
            ->post("{$this->baseUrl}/transaction/initialize", [
                'email' => $request->email,
                'amount' => $request->amount * 100,
            ]);

        return $response->json()['data'];
    }

    public function getAllPayments()
    {
        $response = Http::acceptJson()
            ->withToken($this->privateKey)
            ->get("{$this->baseUrl}/transaction");

        return $response->json()['data'];
    }

    public function getPayment($id)
    {
        $response = Http::acceptJson()
            ->withToken($this->privateKey)
            ->get("{$this->baseUrl}/transaction/{$id}");

        return $response->json()['data'];
    }

    private function baseUrl(): void
    {
        $this->baseUrl = config('services.paystack.paystack_url');
    }

    private function privateKey(): void
    {
        $this->privateKey = config('services.paystack.secret_key');
    }


}
