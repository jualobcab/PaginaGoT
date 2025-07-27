<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Stat
 * 
 * @property int $id
 * @property string $name
 * @property string $description
 * 
 * @property Collection|Character[] $characters
 * @property Collection|QualityRequirement[] $quality_requirements
 * @property Collection|Specialty[] $specialties
 *
 * @package App\Models
 */
class Stat extends Model
{
	protected $table = 'stat';
	public $timestamps = false;

	protected $fillable = [
		'name',
		'description'
	];

	public function characters()
	{
		return $this->belongsToMany(Character::class)
					->withPivot('id', 'rank');
	}

	public function quality_requirements()
	{
		return $this->hasMany(QualityRequirement::class, 'required_stat_id');
	}

	public function specialties()
	{
		return $this->hasMany(Specialty::class);
	}
}
