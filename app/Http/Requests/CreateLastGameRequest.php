<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateLastGameRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'teamA' => 'required|string|max:50',
            'teamB' => 'required|string|max:50',
            'scoreA' => 'required|integer',
            'scoreB' => 'required|integer',
            'gameDate' => 'required|date',
            'gameWeek' => 'required|integer',
        ];
    }
}
