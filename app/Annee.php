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
 * Class Annee
 * 
 * @property int $id
 * @property string $uuid
 * @property string $name
 * @property string $deleted_at
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Collection|Depense[] $depenses
 * @property Collection|Participation[] $participations
 * @property Collection|Recette[] $recettes
 *
 * @package App
 */
class Annee extends Model
{
	
	use \Illuminate\Database\Eloquent\SoftDeletes;
	protected $table = 'annees';

	protected $fillable = [
		'uuid',
		'name'
	];

	public function depenses()
	{
		return $this->hasMany(Depense::class, 'annees_id');
	}

	public function participations()
	{
		return $this->hasMany(Participation::class, 'annees_id');
	}

	public function recettes()
	{
		return $this->hasMany(Recette::class, 'annees_id');
	}
}
