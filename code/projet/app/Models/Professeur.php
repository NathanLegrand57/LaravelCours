<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Professeur
 *
 * @property int $id
 * @property string $nom
 * @property string $prenom
 * @property string|null $date_entree
 * @property int $matiere_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Matiere $matiere
 * @method static \Database\Factories\ProfesseurFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Professeur newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Professeur newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Professeur query()
 * @method static \Illuminate\Database\Eloquent\Builder|Professeur whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Professeur whereDateEntree($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Professeur whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Professeur whereMatiereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Professeur whereNom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Professeur wherePrenom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Professeur whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Professeur extends Model
{
    use HasFactory;

    function matiere()
    {
        return $this->belongsTo(Matiere::class);
    }

    function identite(bool $prenom_en_premier = true): string
    {
        return $prenom_en_premier
            ? $this->prenom . ' ' . $this->nom
            : $this->nom . ' ' . $this->prenom;
    }
}
