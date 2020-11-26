<?php

namespace App\Http\Controllers\Admin;


use App\Model\Admin\Hopital;
use Illuminate\Http\Request;
use App\Model\Admin\Departement;
use MercurySeries\Flashy\Flashy;
use App\Http\Controllers\Controller;

class SpecialiteController extends Controller
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departement = Departement::all();
        return view('admin.specialite.add',compact('departement'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = $this->validate($request,[
            'nom' => 'required|string',
            'departement' => 'required|string',
        ]);

        $add_specialite = new Hopital;
        $add_specialite->name = $request->nom;
        $add_specialite->departement_id =  $request->departement;
        $add_specialite->save();
        Flashy::success('Votre hopital a ete ajouter');
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
        $departement = Departement::all();
        $edit_specialite = Hopital::where('id',$id)->first();
        return view('admin.specialite.edite',compact('edit_specialite','departement'));
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
        $validator = $this->validate($request,[
            'nom' => 'required|string',
            'departement' => 'required|string',
        ]);

        $update_hopital = Hopital::find($id);
        $update_hopital->name = $request->nom;
        $update_hopital->departement_id =  $request->departement;
        $update_hopital->save();
        Flashy::success('Votre hopital a ete modifier');
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
        Hopital::where('id',$id)->delete();
        Flashy::success('Votre hopital a ete supprimer');
        return back();
    }
}
