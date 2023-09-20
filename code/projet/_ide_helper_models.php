<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Admin
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Admin newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Admin newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Admin query()
 */
	class Admin extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Classe
 *
 * @property int $id
 * @property string $batiment
 * @property string $numero
 * @property int $is_ouverte
 * @property int $nombre_places
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\ClasseFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Classe newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Classe newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Classe query()
 * @method static \Illuminate\Database\Eloquent\Builder|Classe whereBatiment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Classe whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Classe whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Classe whereIsOuverte($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Classe whereNombrePlaces($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Classe whereNumero($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Classe whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string $prenom
 * @method static \Illuminate\Database\Eloquent\Builder|Classe wherePrenom($value)
 */
	class Classe extends \Eloquent {}
}

namespace App\Models{
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
	class Matiere extends \Eloquent {}
}

namespace App\Models{
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
	class Professeur extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property mixed $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $guid
 * @property string|null $domain
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Silber\Bouncer\Database\Ability> $abilities
 * @property-read int|null $abilities_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Silber\Bouncer\Database\Role> $roles
 * @property-read int|null $roles_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDomain($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereGuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereIs($role)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereIsAll($role)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereIsNot($role)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class User extends \Eloquent {}
}

