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
 * @property string $deleted_at
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Collection|Membre[] $membres
 *
 * @package App
 */
class Famille extends Model
{
	
	use \Illuminate\Database\Eloquent\SoftDeletes;
	protected $table = 'familles';

	protected $fillable = [
		'uuid',
		'name'
	];

	public function membres()
	{
		return $this->hasMany(Membre::class, 'familles_id');
	}
}
