<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AxleSpacings extends Model
{
    use HasFactory;
    protected $table = "axle_spacings";
    protected $fillable = [
        'id','Axles','Distance','wim_id',
    ]; 

    public function wim()
    {
        return $this->belongsTo(Wim::class);
    }
}
