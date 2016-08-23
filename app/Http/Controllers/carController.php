<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Car ;
use Illuminate\Support\Facades\DB ;
use View;

class carController extends Controller
{

    public function index()
    {
        return view ('welcome') ;
    }



    public function create()
   {
        return view ('create') ;
    }


    public function store(Request $request)
    {

        $make = $request->input('make');
        $model = $request->input('model');
        $produced_on = $request->input('produced_on');
        $car= new Car();
        $ID=  $car->get_id($make ,$model , $produced_on);
        $car = DB::table('cars')
            ->where('ID', '=', $ID)
            ->distinct()->get();
        return view('edit')->with(array('car'=>$car[0]));
    }


    public function show($id)
    {


    }

    public function edit(Request $request)
    {

    }

    public function update(Request $request)
    {

        $id = $request->input('id') ;
        $make = $request->input('make');
        $model = $request->input('model');
        $produced_on = $request->input('produced_on');
        $car= Car::find($id) ;
        $car->make =$make ;
        $car->model=$model;
        $car->produced_on = $produced_on ;
        $car->save() ;

        $car = DB::table('cars')
            ->where('ID', '=', $id)
            ->distinct()->get();
        return view('edit')->with(array('car'=>$car[0]));

    }



    public function destroy($id)
    {
        $car= Car::find($id) ;
        $car->delete ();
        return view ('welcome') ;

    }
}
