<?php

namespace App\Http\Controllers\Information;

use App\User;
use Illuminate\Http\Request;
use App\Model\Admin\Rendez_vous;
use MercurySeries\Flashy\Flashy;
use App\Http\Controllers\Controller;

class OrdonanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('information.ordonance.index');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $add_ordonance = Rendez_vous::find($id);
        return view('information.ordonance.add',compact('add_ordonance'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'ordonance' => 'required|string'
        ]);
        $update_ordonance = Rendez_vous::find($id);
        $update_ordonance->ordonance = $request->ordonance;
        $update_ordonance->save();
        Flashy::success('Votre ordonance a ete ajoute');
        return redirect()->route('medecin.home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
