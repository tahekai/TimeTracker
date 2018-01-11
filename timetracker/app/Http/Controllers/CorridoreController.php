<?php

namespace App\Http\Controllers;

use App\CorridoreTime;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CorridoreController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function createCorridoreTime(Request $request){
 
    	$corridoretime = CorridoreTime::create($request->all());
 
    	return response()->json($corridoretime);
 
	}
    
    public function index()
    {
        $corridoretime  = CorridoreTime::all();
        
        return response()->json($corridoretime);
    }

    //
}
