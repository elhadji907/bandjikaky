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
 * Class Membre
 * 
 * @property int $id
 * @property string $uuid
 * @property string $cin
 * @property Carbon $debut
 * @property Carbon $fin
 * @property int $nbrefant
 * @property int $users_id
 * @property int $generations_id
 * @property int $quartiers_id
 * @property int $familles_id
 * @property string $deleted_at
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Famille $famille
 * @property Generation $generation
 * @property Quartier $quartier
 * @property User $user
 * @property Collection|Participation[] $participations
 *
 * @package App
 */
class Membre extends Model
{
	use SoftDeletes;
	protected $table = 'membres';

	protected $casts = [
		'nbrefant' => 'int',
		'users_id' => 'int',
		'generations_id' => 'int',
		'quartiers_id' => 'int',
		'familles_id' => 'int'
	];

	protected $dates = [
		'debut',
		'fin'
	];

	protected $fillable = [
		'uuid',
		'cin',
		'debut',
		'fin',
		'nbrefant',
		'users_id',
		'generations_id',
		'quartiers_id',
		'familles_id'
	];

	public function famille()
	{
		return $this->belongsTo(Famille::class, 'familles_id');
	}

	public function generation()
	{
		return $this->belongsTo(Generation::class, 'generations_id');
	}

	public function quartier()
	{
		return $this->belongsTo(Quartier::class, 'quartiers_id');
	}

	public function user()
	{
		return $this->belongsTo(User::class, 'users_id');
	}

	public function participations()
	{
		return $this->hasMany(Participation::class, 'membres_id');
	}
}
