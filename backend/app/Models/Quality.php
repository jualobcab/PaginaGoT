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
 * @property bool|null $repeatable
 * @property string $type
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

	protected $casts = [
		'repeatable' => 'bool'
	];

	protected $fillable = [
		'name',
		'description',
		'repeatable',
		'type'
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
