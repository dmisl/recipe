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
}
