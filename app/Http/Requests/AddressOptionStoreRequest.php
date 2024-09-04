<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddressOptionStoreRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'addr1' => 'required|string|max:255',
            'addr2' => 'nullable|string|max:255',
            'postcode' => 'required|string|max:255',
            'country' => 'required|string|max:255',
        ];
    }
}
