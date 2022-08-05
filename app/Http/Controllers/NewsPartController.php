<?php

namespace App\Http\Controllers;

use App\Models\NewsPart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewsPartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = NewsPart::where('user_id', Auth::user()->id)->orderBy('date', 'desc')->get();
        return view('commons.news_part.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('commons.news_part.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        NewsPart::create($request->all());
        return redirect(route('news_part.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NewsPart  $newsPart
     * @return \Illuminate\Http\Response
     */
    public function show(NewsPart $newsPart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NewsPart  $newsPart
     * @return \Illuminate\Http\Response
     */
    public function edit(NewsPart $newsPart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NewsPart  $newsPart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NewsPart $newsPart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NewsPart  $newsPart
     * @return \Illuminate\Http\Response
     */
    public function destroy(NewsPart $newsPart)
    {
        //
    }
    public function report(){
return view('commons.news_part.report');
    }
    public function reportPrint( Request $request){
        $from = date($request->dateinit);
        $to = date($request->dateend);
        $reports = NewsPart::where('user_id', Auth::user()->id)->whereBetween('date', [$from, $to])->orderBy('date', 'asc')->get();
        $data = [
            'reports' => $reports
        ];

        return \PDF::loadView('pdf.new_part', $data)
            ->stream('informe-tecnico.pdf');
    }
}
