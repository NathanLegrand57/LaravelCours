<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;
use Auth;

class MatiereRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        $user = Auth::user();

        return Auth::check() &&
            ($user->isA('admin') || $user->can('matiere-create') || $user->can('matiere-update'));
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'libelle' => 'required|string|max:75',
            'niveau' => 'required|numeric'
        ];
    }
}
