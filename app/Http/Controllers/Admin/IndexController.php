<?php

namespace App\Http\Controllers\Admin;

use App\Foods;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
  /*  public function json()
    {
        $dbfood = [];
        $foods = Foods::getFoods();
        foreach ($foods["foods"] as $food ){
            $dbfood[$food["id"]] = $food;
        }
        return response()->json($dbfood)
            ->header('Content-Disposition', 'attachment; filename = "json.txt"')
            ->setEncodingOptions(JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

    }*/
}
