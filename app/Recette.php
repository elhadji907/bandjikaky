<?php

/**
 * Created by Reliese Model.
 */

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Recette
 * 
 * @property int $id
 * @property string $uuid
 * @property string $name
 * @property string $montant
 * @property int $annees_id
 * @property string $deleted_at
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Annee $annee
 *
 * @package App
 */
class Recette extends Model
{
	use SoftDeletes;
	protected $table = 'recettes';

	protected $casts = [
		'annees_id' => 'int'
	];

	protected $fillable = [
		'uuid',
		'name',
		'montant',
		'annees_id'
	];

	public function annee()
	{
		return $this->belongsTo(Annee::class, 'annees_id');
	}
}
