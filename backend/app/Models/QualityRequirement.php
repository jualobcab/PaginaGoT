<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class QualityRequirement
 * 
 * @property int $id
 * @property int $quality_id
 * @property int|null $required_stat_id
 * @property int|null $required_stat_rank
 * @property int|null $required_stat_id2
 * @property int|null $required_stat_rank2
 * @property int|null $required_stat_id3
 * @property int|null $required_stat_rank3
 * @property int|null $required_specialty_id
 * @property int|null $required_specialty_rank
 * @property int|null $required_specialty_id2
 * @property int|null $required_specialty_rank2
 * @property int|null $required_quality_id
 * @property int|null $required_quality_id2
 * @property int|null $required_quality_id3
 * 
 * @property Quality|null $quality
 * @property Specialty|null $specialty
 * @property Stat|null $stat
 *
 * @package App\Models
 */
class QualityRequirement extends Model
{
	protected $table = 'quality_requirement';
	public $timestamps = false;

	protected $casts = [
		'quality_id' => 'int',
		'required_stat_id' => 'int',
		'required_stat_rank' => 'int',
		'required_stat_id2' => 'int',
		'required_stat_rank2' => 'int',
		'required_stat_id3' => 'int',
		'required_stat_rank3' => 'int',
		'required_specialty_id' => 'int',
		'required_specialty_rank' => 'int',
		'required_specialty_id2' => 'int',
		'required_specialty_rank2' => 'int',
		'required_quality_id' => 'int',
		'required_quality_id2' => 'int',
		'required_quality_id3' => 'int'
	];

	protected $fillable = [
		'quality_id',
		'required_stat_id',
		'required_stat_rank',
		'required_stat_id2',
		'required_stat_rank2',
		'required_stat_id3',
		'required_stat_rank3',
		'required_specialty_id',
		'required_specialty_rank',
		'required_specialty_id2',
		'required_specialty_rank2',
		'required_quality_id',
		'required_quality_id2',
		'required_quality_id3'
	];

	public function quality()
	{
		return $this->belongsTo(Quality::class, 'required_quality_id');
	}

	public function specialty()
	{
		return $this->belongsTo(Specialty::class, 'required_specialty_id');
	}

	public function stat()
	{
		return $this->belongsTo(Stat::class, 'required_stat_id');
	}
}
