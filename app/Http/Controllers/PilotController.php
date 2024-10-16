<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pilot;

class PilotController extends Controller
{
    //
    public function index()
    {
        $pilots = Pilot::all();
        return view('pilot.index', [
            'pilots' => $pilots,
        ]);
    }

    public function create(Request $request)
    {

        return view("pilot.create");
    }

    public function store(Request $request)
    {
        $pilot = new Pilot();
        $pilot->name = $request->input('name');
        $pilot->CPF = $request->input('CPF');
        $pilot->phone = $request->input('phone');
        $pilot->RAB = $request->input('RAB');
        $pilot->date_brith = $request->input('date_brith');
        $pilot->save();
        return redirect()->route('pilot.index');
    }

    public function edit($id)
    {
        $pilot = Pilot::find($id);
        return view('pilot.edit', [
            'pilot'=> $pilot,
        ]);
    }

    public function update(Request $request, $id)
    {
        $pilot = Pilot::find($id);
        $pilot->name = $request->input('name');
        $pilot->CPF = $request->input('CPF');
        $pilot->phone = $request->input('phone');
        $pilot->RAB = $request->input('RAB');
        $pilot->date_brith = $request->input('date_brith');
        $pilot->update();
        return redirect()->route('pilot.index');
    }

    public function destroy($id)
    {
        $pilot = Pilot::find($id);
        $pilot->delete();
        return redirect()->route('pilot.index');
    }
}
