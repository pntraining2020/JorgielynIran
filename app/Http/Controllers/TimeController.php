<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TimeController extends Controller
{
    public function ClockIn(Request $request)
    {
        $employee = new time([   
            'clock_in' => Carbon::now()->format('Y-m-d'), 
        ]);

        $employee->save();
        
    }

    public function create()
    {
      
    }

    public function name()
    {
        $employee = DB::table('names')->select('first_name','middle_name','last_name')->get();

        return view('clock')->with('names', $employee);
    }

    public function store(Request $request)
    {
        $employee = [];
        $data = $request->all();
        $employee['first_name'] = $data['first_name'];
        $employee['middle_name'] = $data['midddle_name'];
        $employee['last_name'] = $data['last_name'];

        $save = names::create($employee);
        $save->save();
        return redirecct('/blade');
    }
}
