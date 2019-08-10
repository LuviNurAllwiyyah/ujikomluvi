<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Motor;

class MotorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $motor = Motor::all();
        $response = [
            'success' => true,
            'data' => $motor,
            'message' => 'Berhasil disimpan'
        ];
        return response()->json(response, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $motor = new Motor;
        $motor->motor_merk = $request->get('motor_merk');
        $motor->motor_type = $request->get('motor_type');
        $motor->motor_warna_pilihan = $request->get('motor_warna_pilihan');
        $motor->motor_harga = $request->get('motor_harga');
        $motor->mmotor_gambar = $request->get('motor_gambar');
        $response = [
            'success' => true,
            'data' => $motor,
            'message'=> 'Berhasil disimpan'
        ];
        return response()->json($response, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
