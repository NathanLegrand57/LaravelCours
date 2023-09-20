<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Matiere
 *
 * @property int $id
 * @property string $libelle
 * @property string $niveau
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Professeur> $professeurs
 * @property-read int|null $professeurs_count
 * @method static \Database\Factories\MatiereFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Matiere newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Matiere newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Matiere query()
 * @method static \Illuminate\Database\Eloquent\Builder|Matiere whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Matiere whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Matiere whereLibelle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Matiere whereNiveau($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Matiere whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Matiere extends Model
{
    use HasFactory;

    function professeurs()
    {
        return $this->hasMany(Professeur::class);
    }
}
