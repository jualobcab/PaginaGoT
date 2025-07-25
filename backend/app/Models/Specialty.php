<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Specialty
 * 
 * @property int $id
 * @property string $name
 * @property int $stat_id
 * 
 * @property Stat $stat
 * @property Collection|Character[] $characters
 * @property Collection|QualityRequirement[] $quality_requirements
 *
 * @package App\Models
 */
class Specialty extends Model
{
	protected $table = 'specialty';
	public $timestamps = false;

	protected $casts = [
		'stat_id' => 'int'
	];

	protected $fillable = [
		'name',
		'stat_id'
	];

	public function stat()
	{
		return $this->belongsTo(Stat::class);
	}

	public function characters()
	{
		return $this->belongsToMany(Character::class)
					->withPivot('id', 'rank');
	}

	public function quality_requirements()
	{
		return $this->hasMany(QualityRequirement::class, 'required_specialty_id');
	}
}
