<?php

namespace App\Http\Controllers\Admin;

use App\Foods;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $food = Foods::query()->paginate(12);
        return view('admin.foodsedit')->with('foods', $food);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $food = new Foods();

        if ($request->isMethod('post')) {
            $food->fill($request->all())->save();
            return redirect()->route('admin.foods.index')->with('success', 'Продукт добавлен!');
        }

        return view('admin.create', [
            'foods' => $food
        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,  Foods $food)
    {
        $food->fill($request->all());
        $food->save();
        return redirect()->route('admin.foods.index')->with('success', 'Продукт добавлен!');
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
    public function edit(Request $request, Foods $food)
    {

        return view('admin.create', [
            'foods' => $food
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  Foods $food)
    {
        $food->fill($request->all());
        $food->save();
        return redirect()->route('admin.foods.index')->with('success', 'Продукт добавлен!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Foods $food)
    {
        $food->delete();
        return redirect()->route('admin.foods.index')->with('success', 'Продукт удален!');
    }
}
