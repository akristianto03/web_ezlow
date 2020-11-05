<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Residence extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'call_center',
        'street',
    ];

    public function houses(){
        return $this->hasMany(House::class, 'residential_area', 'id');
    }
}
