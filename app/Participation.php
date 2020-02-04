<?php

/**
 * Created by Reliese Model.
 */

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Participation
 * 
 * @property int $id
 * @property string $uuid
 * @property string $montant
 * @property int $membres_id
 * @property int $annees_id
 * @property string $deleted_at
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Annee $annee
 * @property Membre $membre
 *
 * @package App
 */
class Participation extends Model
{
	use SoftDeletes;
	protected $table = 'participations';

	protected $casts = [
		'membres_id' => 'int',
		'annees_id' => 'int'
	];

	protected $fillable = [
		'uuid',
		'montant',
		'membres_id',
		'annees_id'
	];

	public function annee()
	{
		return $this->belongsTo(Annee::class, 'annees_id');
	}

	public function membre()
	{
		return $this->belongsTo(Membre::class, 'membres_id');
	}
}
