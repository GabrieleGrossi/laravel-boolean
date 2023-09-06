<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Cocktail;
use Illuminate\Http\Request;

class ApiBarController extends Controller
{
    public function index(Request $request){

        if ($request->has('search')){
            $cocktail = Cocktail::where('name', 'LIKE', '%' . $request->search . '%')->paginate(5);
        }
         else{
            $cocktail=Cocktail::paginate(5);
        }


        return response()->json([
            'success'=>true,
            'results'=>$cocktail
        ]);
    }
}
