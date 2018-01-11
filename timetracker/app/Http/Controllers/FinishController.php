<?php

namespace App\Http\Controllers;

use App\FinishTime;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FinishController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function createFinishTime(Request $request){
 
    	$finishtime = FinishTime::create($request->all());
 
    	return response()->json($finishtime);
 
	}
    
    public function index()
    {
        $finishtime  = FinishTime::all();
        
        return response()->json($finishtime);
    }

    //
}
