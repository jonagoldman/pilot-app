<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Enums\CreditCardType;
use Illuminate\Validation\Rule;

class RegisterCreditCardRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'type' => ['required', Rule::enum(CreditCardType::class)],
            'bank' => ['required', 'string'],
            'cc_number' => ['required', 'string', 'size:8', 'unique:credit_cards,cc_number'],
            'limit' => ['required', 'integer'],
            'dni' => ['required', 'integer'],
            'first_name' => ['required', 'string'],
            'last_name' => ['required', 'string'],
        ];
    }
}
