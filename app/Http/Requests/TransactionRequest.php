<?php

namespace App\Http\Requests;

use App\Constants\Permissions;
use Illuminate\Foundation\Http\FormRequest;

class TransactionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return $this->user()->can(Permissions::CREATE_TRANSACTION)
            || $this->user()->can(Permissions::UPDATE_TRANSACTION);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'wallet_id' => ['required'],
            'category_id' => ['nullable'],
            'sub_category_id' => ['nullable'],
            'amount' => ['numeric'],
            'note' => ['nullable'],
            'date' => ['date']
        ];
    }
}
