<?php

namespace App\Http\Controllers\VisualAids;

use App\Http\Controllers\Controller;
use App\Models\MaintenanceRecord;
use Illuminate\Http\Request;

class MaintenanceRecordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = MaintenanceRecord::all();
        return view('visual_aids.maintenance_record.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('visual_aids.maintenance_record.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        MaintenanceRecord::create(['alarm'=> !(is_null($request->alarm_check))] + $request->all());
        return redirect(route('maintenance_record.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MaintenanceRecord  $maintenanceRecord
     * @return \Illuminate\Http\Response
     */
    public function show(MaintenanceRecord $maintenanceRecord)
    {
        return view('visual_aids.maintenance_record.show', compact('maintenanceRecord'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MaintenanceRecord  $maintenanceRecord
     * @return \Illuminate\Http\Response
     */
    public function edit(MaintenanceRecord $maintenanceRecord)
    {
        return view('visual_aids.maintenance_record.edit', compact('maintenanceRecord'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MaintenanceRecord  $maintenanceRecord
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MaintenanceRecord $maintenanceRecord)
    {
        $maintenanceRecord->update(['alarm'=> !(is_null($request->alarm_check))] + $request->all());
        return redirect(route('maintenance_record.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MaintenanceRecord  $maintenanceRecord
     * @return \Illuminate\Http\Response
     */
    public function destroy(MaintenanceRecord $maintenanceRecord)
    {
        $maintenanceRecord->delete();
        return redirect(route('maintenance_record.index'));

    }
}
