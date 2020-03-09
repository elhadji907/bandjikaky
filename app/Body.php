<?php

/**
 * Created by Reliese Model.
 */

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Body
 * 
 * @property int $id
 * @property string $uuid
 * @property string $montant
 * @property string $annee
 * @property int $participations_id
 * @property string $deleted_at
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Participation $participation
 *
 * @package App
 */
class Body extends Model
{
	use SoftDeletes;
	protected $table = 'bodies';

	protected $casts = [
		'participations_id' => 'int'
	];

	protected $fillable = [
		'uuid',
		'montant',
		'annee',
		'participations_id'
	];

	public function participation()
	{
		return $this->belongsTo(Participation::class, 'participations_id');
	}
}
