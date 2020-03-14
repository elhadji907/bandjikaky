<?php

/**
 * Created by Reliese Model.
 */

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Habille
 * 
 * @property int $id
 * @property string $uuid
 * @property string $name
 * @property string $montant
 * @property string $annee
 * @property int $membres_id
 * @property string $deleted_at
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Membre $membre
 *
 * @package App
 */
class Habille extends Model
{
	use SoftDeletes;
	protected $table = 'habilles';

	protected $casts = [
		'membres_id' => 'int'
	];

	protected $fillable = [
		'uuid',
		'name',
		'montant',
		'annee',
		'membres_id'
	];

	public function membre()
	{
		return $this->belongsTo(Membre::class, 'membres_id');
	}
}
