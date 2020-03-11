<?php

/**
 * Created by Reliese Model.
 */

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Administrateur
 * 
 * @property int $id
 * @property string $uuid
 * @property string $matricule
 * @property int $users_id
 * @property string $deleted_at
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property User $user
 *
 * @package App
 */
class Administrateur extends Model
{
	
	use \Illuminate\Database\Eloquent\SoftDeletes;
	use \App\Helpers\UuidForKey;
	
	protected $table = 'administrateurs';

	protected $casts = [
		'users_id' => 'int'
	];

	protected $fillable = [
		'uuid',
		'matricule',
		'users_id'
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'users_id');
	}
}
