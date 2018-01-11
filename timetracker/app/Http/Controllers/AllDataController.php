<?php

namespace App\Http\Controllers;

use App\Alldata;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AllDataController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function createData(Request $request){
 
    	$data = Alldata::create($request->all());
 
    	return response()->json($data);
 
	}
    
    public function index()
    {
        $data  = Alldata::whereNotNull('corridore_time')
            ->get();

        
        return response()->json($data);
    }

    //
}
