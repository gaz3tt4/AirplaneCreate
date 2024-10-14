<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Airplane;

class AirplaneController extends Controller
{
    //

    public function index()
    {
        $airplanes = Airplane::all();
        return view('airplane.index', [
                'airplanes' => $airplanes,
        ]);
    }
    public function create(Request $request)
    {

        return view("airplane.create");
    }

    public function store(Request $request)
    {
        $airplane = new Airplane();
        $airplane->brand = $request->input('brandAirplane');
        $airplane->model = $request->input('modelAirplane');
        $airplane->year = $request->input('yearAirplane');
        $airplane->Status = $request->input('status');
        $airplane->save();
        return redirect('/airplane');
    }

    public function edit($id)
    {
        $airplane = Airplane::find($id);
        return view('airplane.edit', [
            'airplane'=> $airplane,
        ]);
    }

    public function update(Request $request, $id)
    {
        $airplane = Airplane::find($id);
        $airplane->brand = $request->input('brandAirplane');
        $airplane->model = $request->input('modelAirplane');
        $airplane->year = $request->input('yearAirplane');
        $airplane->Status = $request->input('status');
        $airplane->update();
        return redirect('/airplane');

    }

    public function destroy(Request $request, $id)
    {
        $airplane = Airplane::find($id);
        $airplane->delete();
        return redirect('/airplane');
    }

    public function Inactive(Request $request, $id)
    {
        $airplane = Airplane::find($id);
        $airplane->Status = 0;
        $airplane->update();
        return redirect('/airplane');

    }



}
