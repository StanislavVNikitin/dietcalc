<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Foods extends Model
{
    protected $fillable = ['foodProduct', 'foodProteins', 'foodFats', 'foodCarbohydrates', 'foodCalories'];
    public $timestamps = false;
    public $incrementing = true;

public static function rules(){
    return [
        'foodProduct' => "required|min:2|max:50",
        'foodProteins' => 'required|numeric|min:0|max:100',
        'foodFats' => 'required|numeric|min:0|max:100',
        'foodCarbohydrates' => 'required|numeric|min:0|max:100',
        'foodCalories' => 'required|numeric|min:0|max:1000',
    ];
}
public static function attributeNames(){
    return [
        'foodProduct' => 'Название продукта',
        'foodProteins' =>'количество Белков',
        'foodFats' => 'количество Жиров',
        'foodCarbohydrates' => 'количество Углеводов',
        'foodCalories' => 'Калорийность'
    ];
}

}
