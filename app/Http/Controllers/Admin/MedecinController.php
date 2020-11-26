<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Model\Admin\Admin;
use App\Model\Admin\Region;
use App\Model\Admin\Hopital;
use App\Model\Admin\Medecin;
use Illuminate\Http\Request;
use App\Model\Admin\Specialite;
use App\Model\Admin\Departement;
use MercurySeries\Flashy\Flashy;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class MedecinController extends Controller
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
        $medecin_membre = Medecin::all();
        return view('admin.medecin.index',compact('medecin_membre'));
    }

   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // departementFor(Auth::guard('medecin')->user());
        $specialite = Specialite::all();
        return view('admin.medecin.add',compact('specialite'));
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
            'prenom' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:medecins'],
            'phone' => ['required', 'unique:medecins'],
            'prix' => ['required', 'numeric'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'proffession' => ['required', 'string'],
            'specialite' => ['required'],
            'hopital' => ['required'],
        ]);
            // dd($request->hopital);
        $add_medecin = new Medecin;
        $add_medecin->prenom = $request->prenom;
        $add_medecin->email = $request->email;
        $add_medecin->phone = $request->phone;
        $add_medecin->prix = $request->prix;
        $add_medecin->password = Hash::make($request->password);
        $add_medecin->proffession = $request->proffession;
        $add_medecin->specialite = $request->specialite;
        $add_medecin->departement_id = $request->departement;
        $add_medecin->status = 1;
        $add_medecin->hopital_id = $request->hopital;
        $add_medecin->save();
        Flashy::success('Votre Medecin a ete ajouter');
        return redirect()->route('admin.home');
    }
  
    public function medecin_chef(){
        $medecin_chef = Medecin::where('status',1)->get();
        $admin_membre = Admin::All();
        $user_membre = User::All();
        return view('admin.medecin.medecin_chef',compact(['medecin_chef','user_membre','admin_membre']));
    }

    public function medecin_chef_view($id){
        $medecin_chef_view = Medecin::find($id);
        return view('admin.medecin.medecin_chef_view',compact('medecin_chef_view'));
    }

    public function medecin_chef_edit($id){
        $medecin_chef_edit = Medecin::find($id);
        $regions = Region::all();
        $hopitals = Hopital::all();
        // dd($regions);
        return view('admin.medecin.medecin_chef_edit',compact('medecin_chef_edit','regions','hopitals'));
    }

    public function medecin_chef_update(Request $request ,$id){
        $medecin_chef_update = Medecin::find($id);
        $medecin_chef_update->status = $request->status;
      $medecin_chef_update->departement_id = $request->departement;
      $medecin_chef_update->hopital_id = $request->hopital;
      $medecin_chef_update->save();
      Flashy::success('Votre medecin a ete modifier');
      return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $medecin_show = Medecin::where('id',$id)->first();
        return view('admin.medecin.show',compact('medecin_show'));
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
        $update_status = Medecin::find($id);
        $update_status->status = $request->status;
        $update_status->save();
        Flashy::success('Votre medecin est en mode medecin chef');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Medecin::where('id',$id)->delete();
        Flashy::success('Votre medecin a ete supprimer');
        return redirect()->route('admin.home');
    }
}
