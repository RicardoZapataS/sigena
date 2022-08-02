<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\RouteModule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class RouteModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = RouteModule::all();
        return view('admin.route_module.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        $routes = \Illuminate\Support\Facades\Route::getRoutes();

//        foreach ($routeCollection as $value) {
//            echo "<td>" . $value->getName() . "</td>";
//        }
        $modules = RouteModule::whereNull('route_module_id')->get();
        return view('admin.route_module.create', compact('modules', 'routes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        RouteModule::create(['route_module_id' => ($request->route_module != -1 ? $request->route_module : null)] + $request->all());
        return  redirect(route('route_module.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RouteModule  $routeModule
     * @return \Illuminate\Http\Response
     */
    public function show($routeModule)
    {
        $data = RouteModule::find($routeModule);
        $modules = RouteModule::whereNull('route_module_id')->get();
        return view('admin.route_module.show', compact('modules', 'data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RouteModule  $routeModule
     * @return \Illuminate\Http\Response
     */
    public function edit($routeModule)
    {
        $data = RouteModule::find($routeModule);
        $modules = RouteModule::whereNull('route_module_id')->get();
        return view('admin.route_module.edit', compact('modules', 'data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RouteModule  $routeModule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $routeModule)
    {
        $data = RouteModule::find($routeModule);
        $data->update(['route_module_id' => ($request->route_module != -1 ? $request->route_module : null)] + $request->all());
        return  redirect(route('route_module.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RouteModule  $routeModule
     * @return \Illuminate\Http\Response
     */
    public function destroy($routeModule)
    {
        $data = RouteModule::find($routeModule);
        $data->delete();
        return  redirect(route('route_module.index'));
    }
}
