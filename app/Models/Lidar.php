<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lidar extends Model
{
    use HasFactory;
    protected $table = "lidar";
    protected $fillable = [
        'id','LidarLimitHeight','LidarLimitWidth','LidarLimitLength',
        'LidarReadingHeight','LidarReadingWidth','LidarReadingLength',
        'LidarOverHeight','LidarOverWidth','LidarOverLength',
        'LidarPercentageHeight','LidarPercentageWidth','LidarPercentageLength',
        'IsLidarOverHeight','IsLidarOverWidth','IsLidarOverLength',
        'IsDimensionOver','LidarRaw','wim_id',
    ];
    public function wim()
    {
        return $this->belongsTo('App\Models\Wim','id','id');
        // return $this->belongsTo(Wim::class,'foreign_key');
    }
}
