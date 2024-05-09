<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $recipes = Recipe::query()->get();
        return view('home.index', compact('recipes'));
    }
    public function show($id)
    {
        $recipe = Recipe::find($id);
        if($recipe)
        {
            return view('home.show', compact('recipe'));
        } else
        {
            return redirect()->route('home.index');
        }
    }
    public function store(Request $request)
    {
        Recipe::create([
            'name' => $request->name,
            'desc' => $request->desc,
            'ingredients' => $request->ingredients,
            'instructions' => $request->instructions,
            'time' => 60
        ]);
        return back();
    }
    public function delete(Request $request)
    {
        Recipe::find($request->id)->delete();
        return back();
    }
}
