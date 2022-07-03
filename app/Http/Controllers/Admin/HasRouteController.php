<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Area;
use App\Models\HasRoute;
use App\Models\RouteModule;
use App\User;
use Illuminate\Http\Request;

class HasRouteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = HasRoute::all();
        return view('admin.has_route.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $routes = RouteModule::whereNull('route_module_id')->get();
        $areas = Area::all();
        $users = User::all();
        //dd($routes);
        return view('admin.has_route.create', compact('routes', 'areas', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        HasRoute::create($request->all());
        return redirect(route('has_route.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HasRoute  $hasRoute
     * @return \Illuminate\Http\Response
     */
    public function show(HasRoute $hasRoute)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HasRoute  $hasRoute
     * @return \Illuminate\Http\Response
     */
    public function edit(HasRoute $hasRoute)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HasRoute  $hasRoute
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HasRoute $hasRoute)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HasRoute  $hasRoute
     * @return \Illuminate\Http\Response
     */
    public function destroy(HasRoute $hasRoute)
    {
        //
    }
}
