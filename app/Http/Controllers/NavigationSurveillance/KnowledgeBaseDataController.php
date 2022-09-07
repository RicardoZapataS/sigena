<?php

namespace App\Http\Controllers\NavigationSurveillance;

use App\Http\Controllers\Controller;
use App\Models\KnowledgeBaseData;
use Dompdf\Dompdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KnowledgeBaseDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = KnowledgeBaseData::orderBy('id', 'desc')->get();
        return view('navigation_and_surveillance.knowledge_base.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('navigation_and_surveillance.knowledge_base.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = [
            'date_attention' => explode("T", $request->date_attention_j)[0],
            'time_attention' => explode("T", $request->date_attention_j)[1],
            'time_rehabilitation' => (explode(":", $request->time_rehabilitation_j)[0] * 60) + explode(":", $request->time_rehabilitation_j)[1],
            'time_event' => explode("T", $request->date_event_j)[1],
            'date_event' => explode("T", $request->date_event_j)[0],
            'user_id' => Auth::user()->id,
        ];
        KnowledgeBaseData::create($request->all() + $data);
        return  redirect(route('knowledge_base.index'));
    }

    public function show(KnowledgeBaseData $knowledgeBaseData)
    {
        $date_event_j = $knowledgeBaseData->date_event . 'T' . $knowledgeBaseData->time_event;
        $date_attention_j = $knowledgeBaseData->date_attention . 'T' . $knowledgeBaseData->time_attention;
        $time_rehabilitation_j =
            ((intdiv($knowledgeBaseData->time_rehabilitation, 60)<10)?
                ('0' . intdiv($knowledgeBaseData->time_rehabilitation, 60)):
                (intdiv($knowledgeBaseData->time_rehabilitation, 60))).
            ':'. ((($knowledgeBaseData->time_rehabilitation % 60)<0) ?
                ('0' . ($knowledgeBaseData->time_rehabilitation % 60)) :
                (($knowledgeBaseData->time_rehabilitation % 60)));
        //dd($date_event_j, $date_attention_j, $time_rehabilitation_j);
        return  view('navigation_and_surveillance.knowledge_base.show', compact('knowledgeBaseData', 'time_rehabilitation_j','date_attention_j', 'date_event_j'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\KnowledgeBaseData  $knowledgeBaseData
     * @return \Illuminate\Http\Response
     */
    public function edit(KnowledgeBaseData $knowledgeBaseData)
    {
        $date_event_j = $knowledgeBaseData->date_event . 'T' . $knowledgeBaseData->time_event;
        $date_attention_j = $knowledgeBaseData->date_attention . 'T' . $knowledgeBaseData->time_attention;
        $time_rehabilitation_j =
            ((intdiv($knowledgeBaseData->time_rehabilitation, 60)<10)?
                ('0' . intdiv($knowledgeBaseData->time_rehabilitation, 60)):
                (intdiv($knowledgeBaseData->time_rehabilitation, 60))).
            ':'. ((($knowledgeBaseData->time_rehabilitation % 60)<0) ?
                ('0' . ($knowledgeBaseData->time_rehabilitation % 60)) :
                (($knowledgeBaseData->time_rehabilitation % 60)));
        //dd($date_event_j, $date_attention_j, $time_rehabilitation_j);
        return view('navigation_and_surveillance.knowledge_base.edit', compact('knowledgeBaseData', 'time_rehabilitation_j','date_attention_j', 'date_event_j'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\KnowledgeBaseData  $knowledgeBaseData
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KnowledgeBaseData $knowledgeBaseData)
    {
        $data = [
            'date_attention' => explode("T", $request->date_attention_j)[0],
            'time_attention' => explode("T", $request->date_attention_j)[1],
            'time_rehabilitation' => (explode(":", $request->time_rehabilitation_j)[0] * 60) + explode(":", $request->time_rehabilitation_j)[1],
            'time_event' => explode("T", $request->date_event_j)[1],
            'date_event' => explode("T", $request->date_event_j)[0],
            'user_id' => Auth::user()->id,
        ];

        $knowledgeBaseData->update($request->all() + $data);
        return  redirect(route('knowledge_base.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\KnowledgeBaseData  $knowledgeBaseData
     * @return \Illuminate\Http\Response
     */
    public function destroy(KnowledgeBaseData $knowledgeBaseData)
    {
        $knowledgeBaseData->delete();
        return  redirect(route('knowledge_base.index'));
    }
    public function make()
    {
        return view('navigation_and_surveillance.knowledge_base.report');
    }
    public function print(Request $request)
    {
//        $from = date($request->dateinit);
//        $to = date($request->dateinit);
        $from = date($request->dateinit);
        $to = date($request->dateend);
//        $from = date('2022-07-13');
//        $to = date('2022-07-13');
        $reports = KnowledgeBaseData::whereBetween('date_event', [$from, $to])->orderBy('date_event', 'asc')->get();
        $data = [
            'reports' => $reports,
            'di' => $from,
            'de' => $to
        ];
//dd($data);
        $pdf = \PDF::loadView('pdf.knowledge_base', $data);
        $pdf->setPaper('A4', 'landscape');
        return $pdf->stream('base-de-conocimiento.pdf');

//        $dompdf = new PDF();
//        $dompdf->setPaper('a4', 'landscape');
//        $dompdf->loadView('pdf.knowledge_base', $data);
//        ;
//        return $dompdf->stream('base-de-conocimiento.pdf');
    }
}
