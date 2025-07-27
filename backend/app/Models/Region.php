<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Region
 * 
 * @property int $id
 * @property string $name
 * @property string $probability
 * @property int $defense
 * @property int $influence
 * @property int $lands
 * @property int $law
 * @property int $population
 * @property int $power
 * @property int $fortune
 * 
 * @property Collection|House[] $houses
 *
 * @package App\Models
 */
class Region extends Model
{
	protected $table = 'region';
	public $timestamps = false;

	protected $casts = [
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
		'probability',
		'defense',
		'influence',
		'lands',
		'law',
		'population',
		'power',
		'fortune'
	];

	public function houses()
	{
		return $this->hasMany(House::class);
	}
}
