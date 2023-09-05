<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Cocktail;
use Illuminate\Http\Request;

class ApiBarController extends Controller
{
    public function index(){
        $cocktail=Cocktail::paginate(5);

        return response()->json([
            'success'=>true,
            'results'=>$cocktail
        ]);
    }
}
