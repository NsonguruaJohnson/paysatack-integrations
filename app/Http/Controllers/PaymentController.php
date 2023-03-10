<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PaystackService;

class PaymentController extends Controller
{
    protected $paystackService;

    public function __construct(PaystackService $paystackService)
    {
       $this->paystackService = $paystackService;
    }

    public function index()
    {
        $response = $this->paystackService->getAllPayments();
        $data = collect($response);

        return view('payments.index', [
            'data' => $data,
        ]);
    }

    public function create(Request $request)
    {
        return view('payments.make-payment');
    }

    public function store(Request $request)
    {
        $response = $this->paystackService->makePayment($request);

        $url = $response['authorization_url'];

        return redirect($url);
    }



    public function getPayment($id)
    {
        $response = $this->paystackService->getPayment($id);
        $data = collect($response);

        return view('payments.payment', [
            'data' => $data,
        ]);
    }
}
