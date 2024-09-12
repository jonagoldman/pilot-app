<?php

namespace App\Services;

use App\Models\CreditCard;
use Illuminate\Validation\ValidationException;

class CreditCardService
{
    public function register(array $data): CreditCard
    {
        $credit_card = CreditCard::create($data);

        return $credit_card;
    }

    public function payment(string $cc_number, int $amount, int $quotas): array
    {
        $credit_card = CreditCard::where('cc_number', $cc_number)->first();

        $recharge = 0;
        if ($quotas > 1) {
            $recharge = ($quotas - 1) * 3;
            $amount *= (1 + $recharge / 100);
        }

        if ($amount > $credit_card->limit) {
            throw ValidationException::withMessages([
                'amount' => ['The provided amount exceeds the limit.'],
            ]);
        }

        return [
            'full_name' => $credit_card->fullName,
            'recharge' => "$recharge%",
            'total' => $amount,
        ];
    }
}
