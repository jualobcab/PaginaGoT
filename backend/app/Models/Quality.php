<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Quality
 * 
 * @property int $id
 * @property string $name
 * @property string $description
 * 
 * @property Collection|Character[] $characters
 * @property Collection|QualityRequirement[] $quality_requirements
 *
 * @package App\Models
 */
class Quality extends Model
{
	protected $table = 'quality';
	public $timestamps = false;

	protected $fillable = [
		'name',
		'description'
	];

	public function characters()
	{
		return $this->belongsToMany(Character::class)
					->withPivot('id');
	}

	public function quality_requirements()
	{
		return $this->hasMany(QualityRequirement::class, 'required_quality_id');
	}
}
