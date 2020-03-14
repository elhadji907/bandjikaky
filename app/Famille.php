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
 * Class Famille
 * 
 * @property int $id
 * @property string $uuid
 * @property string $name
 * @property int $quartiers_id
 * @property string $deleted_at
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Quartier $quartier
 * @property Collection|Membre[] $membres
 *
 * @package App
 */
class Famille extends Model
{
	use SoftDeletes;
	protected $table = 'familles';

	protected $casts = [
		'quartiers_id' => 'int'
	];

	protected $fillable = [
		'uuid',
		'name',
		'quartiers_id'
	];

	public function quartier()
	{
		return $this->belongsTo(Quartier::class, 'quartiers_id');
	}

	public function membres()
	{
		return $this->hasMany(Membre::class, 'familles_id');
	}
}
