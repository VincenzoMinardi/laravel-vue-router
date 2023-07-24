<?php

namespace App\Http\Controllers\Api;

use App\Models\Cocktail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index()
    {
        $cocktails = Cocktail::select('category')->groupBy('category')->get();

        return response()->json($cocktails);
    }
}
