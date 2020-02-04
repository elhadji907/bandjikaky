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
 * Class Quartier
 * 
 * @property int $id
 * @property string $uuid
 * @property string $name
 * @property string $deleted_at
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Collection|Membre[] $membres
 *
 * @package App
 */
class Quartier extends Model
{
	use SoftDeletes;
	protected $table = 'quartiers';

	protected $fillable = [
		'uuid',
		'name'
	];

	public function membres()
	{
		return $this->hasMany(Membre::class, 'quartiers_id');
	}
}
