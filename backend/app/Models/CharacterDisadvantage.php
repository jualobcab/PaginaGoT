<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CharacterDisadvantage
 * 
 * @property int $id
 * @property int $character_id
 * @property int $disadvantage_id
 * 
 * @property Character $character
 * @property Disadvantage $disadvantage
 *
 * @package App\Models
 */
class CharacterDisadvantage extends Model
{
	protected $table = 'character_disadvantage';
	public $timestamps = false;

	protected $casts = [
		'character_id' => 'int',
		'disadvantage_id' => 'int'
	];

	protected $fillable = [
		'character_id',
		'disadvantage_id'
	];

	public function character()
	{
		return $this->belongsTo(Character::class);
	}

	public function disadvantage()
	{
		return $this->belongsTo(Disadvantage::class);
	}
}
