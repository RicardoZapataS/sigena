<?php

namespace App\Http\Controllers\Admin;

use App\Models\Area;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class AreasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Area::all();
        return  view('admin.area.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //dd($routeCollection = \Illuminate\Support\Facades\Route::getRoutes());
        $routes = \Illuminate\Support\Facades\Route::getRoutes();
        $users =  User::all();
        return view('admin.area.create', compact('users', 'routes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $area = new Area();
        $area->name = $request->name;
        $area->user_id = ($request->user_id == -1 ? null : $request->user_id);
        $area->save();
        return redirect(route('area.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Area  $areas
     * @return \Illuminate\Http\Response
     */
    public function show(Area $areas)
    {
        $users =  User::all();
        return view('admin.area.show', compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Area  $areas
     * @return \Illuminate\Http\Response
     */
    public function edit($areas)
    {
        $data = Area::find($areas);
        $users =  User::all();
        return view('admin.area.edit', compact('users', 'data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Area  $areas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $areas)
    {
        $area = Area::find($areas);
        $area->name = $request->name;
        $area->user_id = ($request->user_id == -1 ? null : $request->user_id);
        $area->save();
        return redirect(route('area.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Area  $areas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Area $areas)
    {
        //
    }
}
