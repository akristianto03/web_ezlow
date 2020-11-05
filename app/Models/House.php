<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    use HasFactory;

    protected $fillable = [
        'block',
        'owner',
        'telephone',
        'purchase_date',
        'residential_area',
    ];

    public function creator(){
       return $this->belongsTo(Residence::class, 'residential_area', 'id');
    }

}
