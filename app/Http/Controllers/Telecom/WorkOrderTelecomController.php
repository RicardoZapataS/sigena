<?php

namespace App\Http\Controllers\Telecom;

use App\Http\Controllers\Controller;
use App\WorkOrderTelecom;
use Illuminate\Http\Request;

class WorkOrderTelecomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return  view();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\WorkOrderTelecom  $workOrderTelecom
     * @return \Illuminate\Http\Response
     */
    public function show(WorkOrderTelecom $workOrderTelecom)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\WorkOrderTelecom  $workOrderTelecom
     * @return \Illuminate\Http\Response
     */
    public function edit(WorkOrderTelecom $workOrderTelecom)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\WorkOrderTelecom  $workOrderTelecom
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WorkOrderTelecom $workOrderTelecom)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\WorkOrderTelecom  $workOrderTelecom
     * @return \Illuminate\Http\Response
     */
    public function destroy(WorkOrderTelecom $workOrderTelecom)
    {
        //
    }
}
