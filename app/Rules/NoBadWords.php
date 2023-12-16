<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class NoBadWords implements Rule
{
    public function passes($attribute, $value)
    {
        // Liste des mauvais mots
        $badWords = ['zebi', 'insulte2', 'insulte3'];

        // Vérifier si le texte contient des mots d'insulte
        foreach ($badWords as $badWord) {
            if (stripos($value, $badWord) !== false) {
                return false;
            }
        }

        return true;
    }
    public function message()
    {
        return 'Le champ :attribute contient des mots interdits.';
    }


}
