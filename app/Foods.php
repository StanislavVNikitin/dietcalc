<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Foods extends Model
{
    protected $fillable = ['foodProduct', 'foodProteins', 'foodFats', 'foodCarbohydrates', 'foodCalories'];
    public $timestamps = false;
    public $incrementing = true;
}
