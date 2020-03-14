<?php

/**
 * Created by Reliese Model.
 */

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class User
 * 
 * @property int $id
 * @property string $uuid
 * @property string $civilite
 * @property string $firstname
 * @property string $name
 * @property string $username
 * @property string $email
 * @property string $telephone
 * @property Carbon $date_naissance
 * @property string $lieu_naissance
 * @property string $situation_familiale
 * @property string $situation_professionnelle
 * @property string $adresse
 * @property string $status
 * @property Carbon $email_verified_at
 * @property string $password
 * @property int $roles_id
 * @property string $remember_token
 * @property string $deleted_at
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Role $role
 * @property Collection|Administrateur[] $administrateurs
 * @property Collection|Gestionnaire[] $gestionnaires
 * @property Collection|Membre[] $membres
 * @property Collection|Profile[] $profiles
 *
 * @package App
 */
class User extends Model
{
	use SoftDeletes;
	protected $table = 'users';

	protected $casts = [
		'roles_id' => 'int'
	];

	protected $dates = [
		'date_naissance',
		'email_verified_at'
	];

	protected $hidden = [
		'password',
		'remember_token'
	];

	protected $fillable = [
		'uuid',
		'civilite',
		'firstname',
		'name',
		'username',
		'email',
		'telephone',
		'date_naissance',
		'lieu_naissance',
		'situation_familiale',
		'situation_professionnelle',
		'adresse',
		'status',
		'email_verified_at',
		'password',
		'roles_id',
		'remember_token'
	];

	public function role()
	{
		return $this->belongsTo(Role::class, 'roles_id');
	}

	public function administrateurs()
	{
		return $this->hasMany(Administrateur::class, 'users_id');
	}

	public function gestionnaires()
	{
		return $this->hasMany(Gestionnaire::class, 'users_id');
	}

	public function membres()
	{
		return $this->hasMany(Membre::class, 'users_id');
	}

	public function profiles()
	{
		return $this->hasMany(Profile::class, 'users_id');
	}
}
