<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class HouseHistoricalEvent
 * 
 * @property int $id
 * @property int $house_id
 * @property int $event_id
 * @property int $defense_result
 * @property int $influence_result
 * @property int $lands_result
 * @property int $law_result
 * @property int $population_result
 * @property int $power_result
 * @property int $fortune_result
 * 
 * @property HistoricalEvent $historical_event
 * @property House $house
 *
 * @package App\Models
 */
class HouseHistoricalEvent extends Model
{
	protected $table = 'house_historical_events';
	public $timestamps = false;

	protected $casts = [
		'house_id' => 'int',
		'event_id' => 'int',
		'defense_result' => 'int',
		'influence_result' => 'int',
		'lands_result' => 'int',
		'law_result' => 'int',
		'population_result' => 'int',
		'power_result' => 'int',
		'fortune_result' => 'int'
	];

	protected $fillable = [
		'house_id',
		'event_id',
		'defense_result',
		'influence_result',
		'lands_result',
		'law_result',
		'population_result',
		'power_result',
		'fortune_result'
	];

	public function historical_event()
	{
		return $this->belongsTo(HistoricalEvent::class, 'event_id');
	}

	public function house()
	{
		return $this->belongsTo(House::class);
	}
}
