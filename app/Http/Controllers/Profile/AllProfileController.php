<?php

namespace App\Http\Controllers\Profile;

use App\User;
use App\Model\Admin\Admin;
use App\Model\Admin\Medecin;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;
use App\Model\Admin\Disponibilite;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AllProfileController extends Controller
{
   public function view_client(){
    $profile = Auth::guard('web')->user();
       return view('profile.client',compact('profile'));
   }
   public function update_client(Request $request)
   {
       $this->validate($request,[
           'nom' => 'required|string',
           'prenom' => 'required|string',
           'email' => 'required|string|email',
           'phone' => 'required|numeric',
           'password' => 'confirmed'
       ]);

       $update_profil = Auth::guard('web')->user();
       $update_date = '';
       $update_password = '';
       if($request->hasFile('image'))
       {
           $imageName = $request->image->store('public/User');
       }else
       {
           $imageName = $update_profil->image;
       }
       if($request->date != '' ){
           $update_date = $request->date;
       }else{
           $update_date = $update_profil->date;
       }
       if($request->password != ''){
           $update_password = Hash::make($request->password);
       }else{
           $update_password = $update_profil->password;
       }
       $update_profil->nom = $request->nom;
       $update_profil->prenom = $request->prenom;
       $update_profil->email = $request->email;
       $update_profil->phone = $request->phone;
       $update_profil->date = $update_date;
       $update_profil->password = $update_password;
       $update_profil->image = $imageName;
       $update_profil->save();
       Flashy::success('Votre Profil a bien ete mise a jour');
       return back();
   }

    public function view_medecin(){
        $disponibilites = Disponibilite::all();
        $profile = Auth::guard('medecin')->user();
        return view('profile.medecin',compact('profile','disponibilites'));
    }

    public function update_medecin(Request $request){
        $this->validate($request,[
            'phone' => 'required|numeric',
            'password' => 'confirmed'
        ]);
        $update_medecin = Auth::guard('medecin')->user();
        if($request->hasFile('image'))
        {
            $imageName = $request->image->store('public/Medecin');
        }else
        {
            $imageName = $update_medecin->image;
        }
        if($request->password != ''){
            $update_password = Hash::make($request->password);
        }else{
            $update_password = $update_medecin->password;
        }
      
        $update_medecin->prenom = $request->prenom;
        $update_medecin->email = $request->email;
        $update_medecin->phone = $request->phone;
        $update_medecin->bibliographie = $request->bibliographie;
        $update_medecin->password =$update_password;
        $update_medecin->image = $imageName;
        $update_medecin->departement_id = $request->departement;
        $update_medecin->hopital_id = $request->hopital;
        $update_medecin->prix = $request->prix;
        $update_medecin->proffession = $request->proffession;
        $update_medecin->specialite = $request->specialite;
        $update_medecin->save();
        $update_medecin->disponibilites()->sync($request->disponibilite);
        Flashy::success('Votre Profile a bien ete mise a jour');
        return back();
    }

    // Partie de l'admin

    public function view_admin(){

        $profile = Auth::guard('admin')->user();
        return view('profile.admin',compact('profile'));
    }

    public function update_admin(Request $request){
        $this->validate($request,[
            'nom' => 'required|string',
            'email' => 'required|string|email',
            'phone' => 'required|numeric',
            'password' => 'confirmed'
        ]);
        $update_admin = Auth::guard('admin')->user();
        if($request->hasFile('image'))
        {
            $imageName = $request->image->store('public/Admin');
        }else
        {
            $imageName = $update_admin->image;
        }
        if($request->password != ''){
            $update_password = Hash::make($request->password);
        }else{
            $update_password = $update_admin->password;
        }
        $update_admin->nom = $request->nom;
        $update_admin->email = $request->email;
        $update_admin->phone = $request->phone;
        $update_admin->password = $update_password;
        $update_admin->image = $imageName;
        $update_admin->save();
        Flashy::success('Votre Profile a bien ete mise a jour');
        return back();
    }
}
