<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class HistoricalEvent
 * 
 * @property int $id
 * @property int $name
 * @property string $defense_throw
 * @property string $influence_throw
 * @property string $lands_throw
 * @property string $law_throw
 * @property string $population_throw
 * @property string $power_throw
 * @property string $fortune_throw
 * 
 * @property Collection|House[] $houses
 *
 * @package App\Models
 */
class HistoricalEvent extends Model
{
	protected $table = 'historical_events';
	public $timestamps = false;

	protected $casts = [
		'name' => 'int'
	];

	protected $fillable = [
		'name',
		'defense_throw',
		'influence_throw',
		'lands_throw',
		'law_throw',
		'population_throw',
		'power_throw',
		'fortune_throw'
	];

	public function houses()
	{
		return $this->belongsToMany(House::class, 'house_historical_events', 'event_id')
					->withPivot('id', 'defense_result', 'influence_result', 'lands_result', 'law_result', 'population_result', 'power_result', 'fortune_result');
	}
}
