<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InsurancePlan extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'price'];

    public function members()
    {
        return $this->hasMany(Member::class);
    }
}
