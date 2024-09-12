<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PaymentCreditCardRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'cc_number' => ['required', 'string', 'size:8', 'exists:credit_cards,cc_number'],
            'amount' => ['required', 'integer'],
            'quotas' => ['required', 'integer', 'digits_between:1,6'],
        ];
    }
}
