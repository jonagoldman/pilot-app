<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterCreditCardRequest;
use App\Http\Requests\PaymentCreditCardRequest;
use App\Services\CreditCardService;

class CreditCardController extends Controller
{
    public function __construct(
        protected CreditCardService $service,
    ) {}

    public function register(RegisterCreditCardRequest $request)
    {
        $credit_card = $this->service->register($request->validated());

        return response()->json([
            'message' => 'Credit Card Saved',
            'data' => $credit_card,
        ]);
    }

    public function payment(PaymentCreditCardRequest $request)
    {
        $data = $request->validated();

        $payment = $this->service->payment($data['cc_number'], $data['amount'], $data['quotas']);

        return response()->json([
            'message' => 'Payment Successful',
            'data' => $payment,
        ]);
    }
}
