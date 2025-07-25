<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Disadvantage
 * 
 * @property int $id
 * @property string $name
 * @property string $description
 * 
 * @property Collection|Character[] $characters
 *
 * @package App\Models
 */
class Disadvantage extends Model
{
	protected $table = 'disadvantage';
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
}
