<?php

namespace App\Http\Controllers;

use App\Participants;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ParticipantsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()
    {
        $participants  = Participants::all();
        
        return response()->json($participants);
    }
    
    public function getTime()
    {
        $participants  = Participants
            ::join('finish_times', 'Participants.chipcode', '=', 'finish_times.chipcode')
                ->select('Participants.*', 'finish_times.time')
                ->get();
        
        return response()->json($participants);
    }

    //
}
