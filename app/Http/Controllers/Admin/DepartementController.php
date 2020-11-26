<?php

namespace App\Http\Controllers\Admin;

use App\Model\Admin\Region;
use App\Model\Admin\Hopital;
use Illuminate\Http\Request;
use App\Model\Admin\Specialite;
use App\Model\Admin\Departement;
use MercurySeries\Flashy\Flashy;
use App\Http\Controllers\Controller;

class DepartementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('auth:admin');
     }
    public function index()
    {
        $departements = Departement::paginate(10);
        $hopitals = Hopital::paginate(10);
        return view('admin.departement.index',compact('departements','hopitals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $regions = Region::all();
        return view('admin.departement.add',compact('regions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = $this->validate($request , [
            'nom' => 'required|string',
            'region' => 'required|string',
        ]);


        $add_departement = new Departement;
        $add_departement->name = $request->nom;
        $add_departement->region_id = $request->region;
        $add_departement->save();
        Flashy::success('Votre departement a ete ajouter');
        return redirect()->route('departement.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $regions = Region::all();
        $edite_dep = Departement::where('id',$id)->first();
        return view('admin.departement.edite',compact('edite_dep','regions'));
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
        $validator = $this->validate($request , [
            'nom' => 'required|string',
            'region' => 'required|string',
        ]);

        $update_departement = Departement::find($id);
        $update_departement->name = $request->nom;
        $update_departement->region_id = $request->region;
        $update_departement->save();
        Flashy::success('Votre departement a ete modifier');
        return redirect()->route('departement.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Departement::where('id',$id)->delete();
        Flashy::success('Votre departement a ete supprimer');
        return back();
    }
}
