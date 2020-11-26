<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Model\Admin\Demander;
use App\Model\Admin\Rendez_vous;
use App\Http\Controllers\Controller;

class DemanderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('auth:web');
     }
    public function index()
    {
        //
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
        $this->validate($request,[
            'date'=> "required|date",
            'time' => "required",
            'motif' => "required|string"
        ]);

        $demander_add = new Rendez_vous;
        $demander_add->date = $request->date;
        $demander_add->heure = $request->time;
        $demander_add->objet = $request->motif;
        $demander_add->status = $request->status;
        $demander_add->medecin_id = $request->medecin_id;
        $demander_add->client_id = $request->client_id;
        $demander_add->save();
        return redirect()->route('medecin.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $medecin_demander = User::find($id);
        return view('admin.medecin.demander',compact('medecin_demander'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
