<?php

namespace App\Http\Controllers\VisualAids;

use App\Http\Controllers\Controller;
use App\Models\MaintenanceRecord;
use App\Models\WorkOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WorkOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = WorkOrder::all();
        return view('visual_aids.worker_order.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('visual_aids.worker_order.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $order = WorkOrder::create($request->all());
        if (!is_null($request->alarm_check)){
            $record = new MaintenanceRecord();
            $record->date_maintenance = $request->date_work;
            $record->turn = $request->turn;
            $record->activity_name = 'Iluminacion de pista';
            $record->activity_ident = 'Inspeccion';
            $record->business = 'NAABOL';
            $record->description = "Se realiza la inspeccion de luces de pista des de las " . ($request->hour_start) . " hasta " . $request->hour_end .
                " y se registra " . (is_null($request->taxiway) ? '' :  $request->taxiway)
                . ' ' . (is_null($request->threshold34) ? '' : 'Calle de rodaje ' . $request->threshold34)
                . ' ' . (is_null($request->threshold16) ? '' : 'Umbral ' . $request->threshold16)
                . ' ' . (is_null($request->als_approximation34) ? '' : 'ALS aproximacion 34 ' .  $request->als_approximation34)
                . ' ' . (is_null($request->als_approximation16) ? '' : 'ALS aproximacion 16 ' .  $request->als_approximation16)
                . ' ' . (is_null($request->runway_edge_lice) ? '' : 'Luces borde de pista ' .  $request->runway_edge_lice)
                . ' ' . (is_null($request->papi34) ? '' : 'PAPI 34 ' .  $request->papi34)
                . ' ' . (is_null($request->papi16) ? '' : 'PAPI 16 ' . $request->papi16)
                . ' ' . (is_null($request->signaling_signs) ? '' : 'Letreros de señalizacion ' .  $request->signaling_signs)
                . ' ' . (is_null($request->twr) ? '' : 'Torre ' .  $request->twr)
                . ' ' . (is_null($request->platform_lightspp) ? '' : 'Luces de platafotma PP ' .  $request->platform_lightspp)
                . ' ' . (is_null($request->platform_lightspapa) ? '' : 'Luces de platafotma PA ' .  $request->platform_lightspapa)
                . ' ' . (is_null($request->platform_lightspc1) ? '' : 'Luces de platafotma PC1 ' .  $request->platform_lightspc1)
                . ' ' . (is_null($request->whirlwind16) ? '' : 'Manga de viento 16 ' .  $request->whirlwind16)
                . ' ' . (is_null($request->whirlwind34) ? '' : 'Manga de viento 34 ' .  $request->whirlwind34);
            $record->observation = $request->observation;
            $record->alarm = '1';
            $record->user_id = Auth::user()->id;
            $record->save();
        }
        return redirect(route('work_order.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\WorkOrder  $workOrder
     * @return \Illuminate\Http\Response
     */
    public function show(WorkOrder $workOrder)
    {

        $data = $workOrder;
        return  view('visual_aids.worker_order.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\WorkOrder  $workOrder
     * @return \Illuminate\Http\Response
     */
    public function edit(WorkOrder $workOrder)
    {
        $data = $workOrder;
        return  view('visual_aids.worker_order.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\WorkOrder  $workOrder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WorkOrder $workOrder)
    {
        $order = $workOrder->update($request->all());
        return redirect(route('work_order.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\WorkOrder  $workOrder
     * @return \Illuminate\Http\Response
     */
    public function destroy(WorkOrder $workOrder)
    {
        $workOrder->delete();
        return redirect(route('work_order.index'));
    }
    public function make()
    {
        return view('visual_aids.worker_order.report');
    }
    public function print(Request $request)
    {
        $from = date($request->dateinit);
        $to = date($request->dateinit);
//        $from = date($request->dateinit);
//        $to = date($request->dateend);
//        $from = date('2022-07-13');
//        $to = date('2022-07-13');
        $reports = WorkOrder::whereBetween('date_work', [$from, $to])->orderBy('date_work', 'asc')->get();
        $data = [
            'data' => $reports
        ];
//dd($data);
        return \PDF::loadView('pdf.work_order', $data)
            ->stream('order-de-trabajo.pdf');
    }
}
