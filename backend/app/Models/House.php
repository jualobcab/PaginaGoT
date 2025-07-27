<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class House
 * 
 * @property int $id
 * @property string $name
 * @property string|null $history
 * @property int $region_id
 * @property int $defense
 * @property int $influence
 * @property int $lands
 * @property int $law
 * @property int $population
 * @property int $power
 * @property int $fortune
 * 
 * @property Region $region
 * @property Collection|Character[] $characters
 * @property Collection|HistoricalEvent[] $historical_events
 *
 * @package App\Models
 */
class House extends Model
{
	protected $table = 'house';
	public $timestamps = false;

	protected $casts = [
		'region_id' => 'int',
		'defense' => 'int',
		'influence' => 'int',
		'lands' => 'int',
		'law' => 'int',
		'population' => 'int',
		'power' => 'int',
		'fortune' => 'int'
	];

	protected $fillable = [
		'name',
		'history',
		'region_id',
		'defense',
		'influence',
		'lands',
		'law',
		'population',
		'power',
		'fortune'
	];

	public function region()
	{
		return $this->belongsTo(Region::class);
	}

	public function characters()
	{
		return $this->hasMany(Character::class);
	}

	public function historical_events()
	{
		return $this->belongsToMany(HistoricalEvent::class, 'house_historical_events', 'house_id', 'event_id')
					->withPivot('id', 'defense_result', 'influence_result', 'lands_result', 'law_result', 'population_result', 'power_result', 'fortune_result');
	}
}
