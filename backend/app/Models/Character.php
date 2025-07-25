<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Character
 * 
 * @property int $id
 * @property string $name
 * @property int $age_category_id
 * @property int $experience_points_total
 * @property int $experience_points_remaining
 * @property int $destiny_points_total
 * @property int $destiny_points_remaining
 * @property int $house_id
 * @property string $history
 * 
 * @property AgeCategory $age_category
 * @property House $house
 * @property Collection|Disadvantage[] $disadvantages
 * @property Collection|Quality[] $qualities
 * @property Collection|Specialty[] $specialties
 * @property Collection|Stat[] $stats
 *
 * @package App\Models
 */
class Character extends Model
{
	protected $table = 'character';
	public $timestamps = false;

	protected $casts = [
		'age_category_id' => 'int',
		'experience_points_total' => 'int',
		'experience_points_remaining' => 'int',
		'destiny_points_total' => 'int',
		'destiny_points_remaining' => 'int',
		'house_id' => 'int'
	];

	protected $fillable = [
		'name',
		'age_category_id',
		'experience_points_total',
		'experience_points_remaining',
		'destiny_points_total',
		'destiny_points_remaining',
		'house_id',
		'history'
	];

	public function age_category()
	{
		return $this->belongsTo(AgeCategory::class);
	}

	public function house()
	{
		return $this->belongsTo(House::class);
	}

	public function disadvantages()
	{
		return $this->belongsToMany(Disadvantage::class)
					->withPivot('id');
	}

	public function qualities()
	{
		return $this->belongsToMany(Quality::class)
					->withPivot('id');
	}

	public function specialties()
	{
		return $this->belongsToMany(Specialty::class)
					->withPivot('id', 'rank');
	}

	public function stats()
	{
		return $this->belongsToMany(Stat::class)
					->withPivot('id', 'rank');
	}
}
