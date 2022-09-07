<?php

namespace App\Http\Controllers\Telecom;

use App\Http\Controllers\Controller;
use App\Models\WorkOrderTelecom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WorkOrderTelecomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = WorkOrderTelecom::all();
        return  view('telecom.work_order.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('telecom.work_order.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        WorkOrderTelecom::create(['user_id'=>Auth::user()->id] + $request->all());
        return redirect(route('work_order_telecom.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WorkOrderTelecom  $workOrderTelecom
     * @return \Illuminate\Http\Response
     */
    public function show($workOrderTelecom)
    {
        $data = WorkOrderTelecom::find($workOrderTelecom);
        return view('telecom.work_order.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WorkOrderTelecom  $workOrderTelecom
     * @return \Illuminate\Http\Response
     */
    public function edit($workOrderTelecom)
    {
        //dd($workOrderTelecom);
        $data = WorkOrderTelecom::find($workOrderTelecom);
        return view('telecom.work_order.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\WorkOrderTelecom  $workOrderTelecom
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $workOrderTelecom)
    {

        $data = WorkOrderTelecom::find($workOrderTelecom);
        $data->update($request->all());
        return redirect(route('work_order_telecom.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WorkOrderTelecom  $workOrderTelecom
     * @return \Illuminate\Http\Response
     */
    public function destroy($workOrderTelecom)
    {
        $data = WorkOrderTelecom::find($workOrderTelecom);
        $data->delete();
        return redirect(route('work_order_telecom.index'));
    }
}
