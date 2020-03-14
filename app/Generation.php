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
 * Class Generation
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
class Generation extends Model
{
	use SoftDeletes;
	protected $table = 'generations';

	protected $fillable = [
		'uuid',
		'name'
	];

	public function membres()
	{
		return $this->hasMany(Membre::class, 'generations_id');
	}
}
