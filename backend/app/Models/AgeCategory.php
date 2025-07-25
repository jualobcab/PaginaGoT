<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AgeCategory
 * 
 * @property int $id
 * @property string $name
 * @property int $max_stat_rank
 * @property int $experience_points
 * @property int $specialty_points
 * @property int $destiny_points
 * @property int $min_disadvantages
 * @property int $max_qualities
 * @property string|null $info
 * 
 * @property Collection|Character[] $characters
 *
 * @package App\Models
 */
class AgeCategory extends Model
{
	protected $table = 'age_category';
	public $timestamps = false;

	protected $casts = [
		'max_stat_rank' => 'int',
		'experience_points' => 'int',
		'specialty_points' => 'int',
		'destiny_points' => 'int',
		'min_disadvantages' => 'int',
		'max_qualities' => 'int'
	];

	protected $fillable = [
		'name',
		'max_stat_rank',
		'experience_points',
		'specialty_points',
		'destiny_points',
		'min_disadvantages',
		'max_qualities',
		'info'
	];

	public function characters()
	{
		return $this->hasMany(Character::class);
	}
}
