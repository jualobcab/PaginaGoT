<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CharacterQuality
 * 
 * @property int $id
 * @property int $character_id
 * @property int $quality_id
 * 
 * @property Character $character
 * @property Quality $quality
 *
 * @package App\Models
 */
class CharacterQuality extends Model
{
	protected $table = 'character_quality';
	public $timestamps = false;

	protected $casts = [
		'character_id' => 'int',
		'quality_id' => 'int'
	];

	protected $fillable = [
		'character_id',
		'quality_id'
	];

	public function character()
	{
		return $this->belongsTo(Character::class);
	}

	public function quality()
	{
		return $this->belongsTo(Quality::class);
	}
}
