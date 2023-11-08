<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateCampaignRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'campaignName' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'npcs' => 'string',
            'playerCharacters' => 'string',
            'plots' => 'string',
            'campaignImage' => 'file|image|max:5000',
        ];
    }
}
