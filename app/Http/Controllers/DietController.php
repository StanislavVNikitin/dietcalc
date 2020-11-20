<?php

namespace App\Http\Controllers;

use App\Diet;
use App\Foods;
use Illuminate\Http\Request;

class DietController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $diet = new Diet();
        $diet = Diet::query()->join('foods','food_id', '=','foods.id')
            ->select('foods.foodProduct', 'foods.foodProteins', 'foods.foodFats',
                'foods.foodCarbohydrates','foods.foodCalories', 'diets.id','diets.count')->get();
        if ($diet->count()){
            $diet = Diet::dietcalc($diet);
            $sumdiet = Diet::sumdiet($diet);
             return view('dietedit', [
                'diets' => $diet,
                'sumdiet' => $sumdiet
            ]);
        }
            else
            {
                return view('dietnew', []);
            }

    }

    public function view()
    {
        $diet = new Diet();
        $diet = Diet::query()->join('foods','food_id', '=','foods.id')
            ->select('foods.foodProduct', 'foods.foodProteins', 'foods.foodFats',
                'foods.foodCarbohydrates','foods.foodCalories', 'diets.id','diets.count')->get();
        if ($diet->count()){
            $diet = Diet::dietcalc($diet);
            $sumdiet = Diet::sumdiet($diet);
            return view('dietview', [
                'diets' => $diet,
                'sumdiet' => $sumdiet
            ]);
        }
        else
        {
            return view('dietnew', []);
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Diet $diet)
    {
         return view('creatediet', [
            'foods' => Foods::query()->select(['id', 'foodProduct', 'foodProteins', 'foodFats'])->get(),
            'diets' => $diet
        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Diet $diet)
    {
        $diet->fill($request->all());
        $diet->save();
        return redirect()->route('diet.index')->with('success', 'Продукт добавлен!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Diet $diet)
    {
        return view('creatediet', [
            'foods' => Foods::query()->select(['id', 'foodProduct', 'foodProteins', 'foodFats'])->get(),
            'diets' => $diet
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  Diet $diet)
    {
        $diet->fill($request->all());
        $diet->save();
        return redirect()->route('diet.index')->with('success', 'Продукт добавлен!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Diet $diet)
    {
        $diet->delete();
        return redirect()->route('diet.index')->with('success', 'Продукт удален!');
    }
}
