<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CharacterStat
 * 
 * @property int $id
 * @property int $character_id
 * @property int $stat_id
 * @property int $rank
 * 
 * @property Character $character
 * @property Stat $stat
 *
 * @package App\Models
 */
class CharacterStat extends Model
{
	protected $table = 'character_stat';
	public $timestamps = false;

	protected $casts = [
		'character_id' => 'int',
		'stat_id' => 'int',
		'rank' => 'int'
	];

	protected $fillable = [
		'character_id',
		'stat_id',
		'rank'
	];

	public function character()
	{
		return $this->belongsTo(Character::class);
	}

	public function stat()
	{
		return $this->belongsTo(Stat::class);
	}
}
