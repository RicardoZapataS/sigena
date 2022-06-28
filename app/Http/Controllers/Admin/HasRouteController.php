<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HasRoute;
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
        return view('admin.has_route.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd();
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
