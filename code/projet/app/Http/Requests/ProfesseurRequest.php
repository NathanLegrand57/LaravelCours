<?php

namespace App\Http\Requests;

use Auth;
use Illuminate\Foundation\Http\FormRequest;

class ProfesseurRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        $user = Auth::user();

        return Auth::check() &&
            ($user->isA('admin') || $user->can('professeur-create') || $user->can('professeur-update'));

    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'nom' => 'required|string|max:75',
            'prenom' => 'required|string|max:75',
            'date_entree' => 'required|date|before:2000-01-01',
            'matiere_id' => 'required|exists:matieres,id',
        ];
    }
}
