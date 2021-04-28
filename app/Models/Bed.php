<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class Bed extends Model
{
    use HasFactory,Searchable;

    protected $guarded = [];

    public function searchableAs()
    {
        return 'name';
    }
 
}

