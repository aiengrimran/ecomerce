<?php

namespace App\Models;

use App\Models\Good;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    public function goods(){
        return $this->hasMany(Good::class);
    }
    public $guarded = [];
}
