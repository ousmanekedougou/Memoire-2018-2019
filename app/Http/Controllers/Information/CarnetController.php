<?php

namespace App\Http\Controllers\Information;

use App\User;
use Illuminate\Http\Request;
use App\Model\Admin\Rendez_vous;
use MercurySeries\Flashy\Flashy;
use App\Http\Controllers\Controller;

class CarnetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carnet_if_existe = Rendez_vous::where('medecin_id',Auth::guard('medecin')->user()->id)->orderBy('id','DESC')->get();
        $client_existe = [];
        foreach($carnet_if_existe as $carnet_recherche){
            if($carnet_recherche->status == 2 && $carnet_recherche->rapport != ''){
                $client_existe[] = $carnet_recherche;
            }
        }
        return view('information.carnet.index',compact('client_existe'));
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
   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $add_carnet = Rendez_vous::find($id);
        return view('information.carnet.add',compact('add_carnet'));
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
            'carnet' => 'required|string'
        ]);
        $update_carnet = Rendez_vous::find($id);
        $update_carnet->carnet = $request->carnet;
        $update_carnet->save();
        Flashy::success('Votre carnet a ete ajoute');
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
