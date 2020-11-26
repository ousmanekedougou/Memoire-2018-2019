<?php

namespace App\Http\Controllers\Admin\Auth;

use App\User;
use App\Model\Admin\Admin;
use App\Model\Admin\Medecin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     * 
     */

     public function __construct(){
        $this->middleware('auth:admin');
     }

    public function index()
    {
        $all_medecin = Medecin::where('status',0)->get();
        $kaolack = []; $kedougou = [];$dakar = [];$tamba = []; $thies = [];$diourbel = []; $matame = [];
        $saintlouis = [];$kolda = [];$fatick = [];$louga = []; $ziguinchore = [];  $sediou = []; $kaffrine = [];
      
        foreach($all_medecin  as $med)
        {
            $medes = $med->departement->region;
            if ($medes->name == 'Kaolack') {
                foreach($medes->departements as $dep){
                    $kaolack[$dep->name] = $dep->medecins;
                }
            }

            if ($medes->name == 'Dakar') {
                foreach($medes->departements as $dep){
                    $dakar[$dep->name] = $dep->medecins;
                }
            }

            if ($medes->name == 'Kedougou') {
                foreach($medes->departements as $dep){
                    $dakar[$dep->name] = $dep->medecins;
                }
            }

            if ($medes->name == 'Fatick') {
                foreach($medes->departements as $dep){
                    $fatick[$dep->name] = $dep->medecins;
                }
            }

            if ($medes->name == 'Tamba') {
                foreach($medes->departements as $dep){
                    $tamba[$dep->name] = $dep->medecins;
                }
            }

            if ($medes->name == 'Saintlouis') {
                foreach($medes->departements as $dep){
                    $saintlouis[$dep->name] = $dep->medecins;
                }
            }

            if ($medes->name == 'Diourbel') {
                foreach($medes->departements as $dep){
                    $diourbel[$dep->name] = $dep->medecins;
                }
            }

            if ($medes->name == 'Louga') {
                foreach($medes->departements as $dep){
                    $louga[$dep->name] = $dep->medecins;
                }
            }

            if ($medes->name == 'Kolda') {
                foreach($medes->departements as $dep){
                    $kolda[$dep->name] = $dep->medecins;
                }
            }

            if ($medes->name == 'Matame') {
                foreach($medes->departements as $dep){
                    $matame[$dep->name] = $dep->medecins;
                }
            }

            if ($medes->name == 'Thies') {
                foreach($medes->departements as $dep){
                    $thies[$dep->name] = $dep->medecins;
                }
            }

            if ($medes->name == 'Kaffrine') {
                foreach($medes->departements as $dep){
                    $kaffrine[$dep->name] = $dep->medecins;
                }
            }

            if ($medes->name == 'Sediou') {
                foreach($medes->departements as $dep){
                    $sediou[$dep->name] = $dep->medecins;
                }
            }

            if ($medes->name == 'Ziguinchore') {
                foreach($medes->departements as $dep){
                    $ziguinchore[$dep->name] = $dep->medecins;
                }
            }
        }
        return view('admin.home',compact(['kaolack','kedougou',
        'dakar','thies','tamba','diourbel','saintlouis','kolda','matame','fatick','louga','ziguinchore','sediou','kaffrine']));
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
