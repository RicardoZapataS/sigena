<?php

namespace App\Http\Controllers\Atc;

use App\Http\Controllers\Controller;
use App\Models\Atc05;
use Illuminate\Http\Request;

class Atc05Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $from = date('Y-m-d') . ' 00:00:00';
        $to = date('Y-m-d') . ' 23:59:59';
        //dd($from, $to);
        $datas = Atc05::whereBetween('created_at', [$from, $to])->get();
        //dd($from, $to, $datas, Atc04::all());
        return view('air_traffic_control.05.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('air_traffic_control.05.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Atc05::create($request->all());
        return redirect(route('aro.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Atc05  $atc05
     * @return \Illuminate\Http\Response
     */
    public function show(Atc05 $atc05)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Atc05  $atc05
     * @return \Illuminate\Http\Response
     */
    public function edit(Atc05 $atc05)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Atc05  $atc05
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Atc05 $atc05)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Atc05  $atc05
     * @return \Illuminate\Http\Response
     */
    public function destroy(Atc05 $atc05)
    {
        //
    }
}
