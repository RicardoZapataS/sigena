<?php

namespace App\Http\Controllers;

use App\Models\LostThing;
use Illuminate\Http\Request;

class LostThingController extends Controller
{
    public function index()
    {
        $datas = LostThing::all();
        return view('commons.lost_things.index', compact('datas'));
    }

    public function create()
    {
        return view('commons.lost_things.create');
    }

    public function store(Request $request)
    {
//        DD($request->all());
        if ($request->hasFile('imagen')) {
            if($request->file('imagen')->isValid()) {
                try {
                    $image = base64_encode(file_get_contents($request->file('imagen')));

                    LostThing::create($request->all() + ['image'=> $image]);
                    return redirect(route('lost_thing.index'));
                } catch (FileNotFoundException $e) {
                    echo "catch";

                }
            }else
                 LostThing::create($request->all());
        }else{
            LostThing::create($request->all());
        }
        return redirect(route('lost_thing.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\LostThing  $lostThing
     * @return \Illuminate\Http\Response
     */
    public function show(LostThing $lostThing)
    {
        return view('commons.lost_things.show', compact('lostThing'));
    }

    public function edit(LostThing $lostThing)
    {
        return view('commons.lost_things.editar', compact('lostThing'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\LostThing  $lostThing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LostThing $lostThing)
    {
        if ($request->hasFile('imagen')) {
            if($request->file('imagen')->isValid()) {
                try {
                    $image = base64_encode(file_get_contents($request->file('imagen')));
                    $lostThing->update($request->all() + ['image'=> $image]);
                    return redirect(route('lost_thing.index'));
                } catch (FileNotFoundException $e) {
                    echo "catch";

                }
            }else
                $lostThing->updatecreate($request->all());
        }else{
            $lostThing->update($request->all());
        }
        return redirect(route('lost_thing.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\LostThing  $lostThing
     * @return \Illuminate\Http\Response
     */
    public function destroy(LostThing $lostThing)
    {
        $lostThing->delete();
        return redirect(route('lost_thing.index'));
    }
}
