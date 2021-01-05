<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Diet extends Model
{
    protected $fillable = ['food_id', 'count', 'user_id'];
    public $timestamps = false;
    public $incrementing = true;

    public function food() {
        return $this->belongsTo(Foods::class, 'food_id')->first();
    }
    static function sumdiet($diet){
        $weight = Auth::user()->weight;
        $sumdiet = [
            'dietProteins' => 0,
            'dietFats' => 0,
            'dietCarbohydrates' => 0,
            'dietCalories' => 0];

        foreach ($diet as $item){
            $sumdiet['dietProteins'] = $sumdiet['dietProteins'] + ( $item->foodProteins);
            $sumdiet['dietFats'] = $sumdiet['dietFats'] + ( $item->foodFats);
            $sumdiet['dietCarbohydrates'] = $sumdiet['dietCarbohydrates'] + ( $item->foodCarbohydrates);
            $sumdiet['dietCalories'] = $sumdiet['dietCalories'] + ( $item->foodCalories);
        }
        $sumdiet['dietProteins'] = round($sumdiet['dietProteins'],1);
        $sumdiet['dietFats'] = round($sumdiet['dietFats'],1);
        $sumdiet['dietCarbohydrates'] = round($sumdiet['dietCarbohydrates'],1);
        $sumdiet['dietCalories'] = round($sumdiet['dietCalories']);

        $sumdiet['dietProteinsKgD'] = round(($sumdiet['dietProteins']/$weight),1);
        $sumdiet['dietFatsKgD'] = round(($sumdiet['dietFats']/$weight),1);
        $sumdiet['dietCarbohydratesKgD'] = round(($sumdiet['dietCarbohydrates']/$weight),1);
        $sumdiet['dietCaloriesKgD'] = round(($sumdiet['dietCalories']/$weight), 1);

        $sumdiet['dietProteinsProcentE'] = round($sumdiet['dietProteins']*400/$sumdiet['dietCalories']);
        $sumdiet['dietFatsProcentE'] = round($sumdiet['dietFats']*900/$sumdiet['dietCalories']);
        $sumdiet['dietCarbohydratesProcentE'] = round($sumdiet['dietCarbohydrates']*400/$sumdiet['dietCalories']);
        $sumdiet['weight'] = $weight;

        return $sumdiet;
    }
    static function dietcalc($diet){
            $i=0;
        foreach ($diet as $item){
            $diet->get($i)->foodProteins = round(($item->foodProteins * $item->count / 100),1);
            $diet->get($i)->foodFats = round(($item->foodFats * $item->count / 100),1);
            $diet->get($i)->foodCarbohydrates = round(($item->foodCarbohydrates * $item->count / 100),1);
            $diet->get($i)->foodCalories = round(($item->foodCalories * $item->count / 100));
            $i++;
        }
        return $diet;
    }
    public static function rules(){
        $tableIdFoods = (new Foods())->getTable();
         return [
            'food_id' => "required|exists:{$tableIdFoods},id",
            'count' => 'required|numeric|min:1|max:1000'
        ];
    }
    public static function attributeNames(){
        return [
            'food_id' => 'Название продукта',
            'count' =>'Количество'
        ];
    }
}
