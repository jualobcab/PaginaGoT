<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CharacterSpecialty
 * 
 * @property int $id
 * @property int $character_id
 * @property int $specialty_id
 * @property int $rank
 * 
 * @property Character $character
 * @property Specialty $specialty
 *
 * @package App\Models
 */
class CharacterSpecialty extends Model
{
	protected $table = 'character_specialty';
	public $timestamps = false;

	protected $casts = [
		'character_id' => 'int',
		'specialty_id' => 'int',
		'rank' => 'int'
	];

	protected $fillable = [
		'character_id',
		'specialty_id',
		'rank'
	];

	public function character()
	{
		return $this->belongsTo(Character::class);
	}

	public function specialty()
	{
		return $this->belongsTo(Specialty::class);
	}
}
