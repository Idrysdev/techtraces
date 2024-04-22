<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Champ;

class TypeCulture extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function champs()
    {
        return $this->hasMany(Champ::class);
    }


}