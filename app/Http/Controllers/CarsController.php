<?php

namespace App\Http\Controllers;

use App\Car;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::all();
        return view ('cars.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cars.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $car = new Car;
        // $car->nama = $request->nama;
        // $car->nohp = $request->nohp;
        // $car->merk = $request->merk;
        // $car->plat = $request->plat;

        // $car->save();

        // Car::create
        // (
        //     [
        //         'nama' => $request->nama,
        //         'nohp' => $request->nohp,
        //         'merk' => $request->merk,
        //         'plat' => $request->plat
        //     ]
        // );

        $request->validate([
            'merk' => 'required',
            'plat' => 'required',
            'harga' => 'required',
            'nama' => 'required',
            'nohp' => 'required',
        ]);

        
        Car::create($request->all());
        return redirect('/cars')->with('status','Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        return view('cars.show', compact('car') );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        return view('cars.edit', compact('car'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car)
    {
        $request->validate([
            'merk' => 'required',
            'plat' => 'required',
            'harga' => 'required',
            'nama' => 'required',
            'nohp' => 'required',
        ]);

        Car::where('id', $car->id)
            ->update([
                'merk' => $request->merk,
                'plat' => $request->plat,
                'harga' => $request->harga,
                'nama' => $request->nama,
                'nohp' => $request->nohp
            ]);
        return redirect('/cars')->with('status','Data berhasil Diedit');
        return $request;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        Car::destroy($car->id);
        return redirect('/cars');
    }
}
