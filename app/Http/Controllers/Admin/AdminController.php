<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Carbon\Carbon;
use App\Model\Admin\Role;
use App\Model\Admin\Admin;
use App\Model\Admin\Medecin;
use Illuminate\Http\Request;
use App\Model\Admin\Specialite;
use App\Model\Admin\Rendez_vous;
use MercurySeries\Flashy\Flashy;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

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
    {   $all_medecin = Medecin::all();
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

            elseif ($medes->name == 'Dakar') {
                foreach($medes->departements as $dep){
                    $dakar[$dep->name] = $dep->medecins;
                }
            }

            elseif ($medes->name == 'Kédougou') {
                foreach($medes->departements as $dep){
                    $kedougou[$dep->name] = $dep->medecins;
                }
            }

            elseif ($medes->name == 'Fatick') {
                foreach($medes->departements as $dep){
                    $fatick[$dep->name] = $dep->medecins;
                }
            }

            elseif ($medes->name == 'Tambacounda') {
                foreach($medes->departements as $dep){
                    $tamba[$dep->name] = $dep->medecins;
                }
            }

            elseif ($medes->name == 'Saint-Louis') {
                foreach($medes->departements as $dep){
                    $saintlouis[$dep->name] = $dep->medecins;
                }
            }

            elseif ($medes->name == 'Diourbel') {
                foreach($medes->departements as $dep){
                    $diourbel[$dep->name] = $dep->medecins;
                }
            }

            elseif ($medes->name == 'Louga') {
                foreach($medes->departements as $dep){
                    $louga[$dep->name] = $dep->medecins;
                }
            }

            elseif ($medes->name == 'Kolda') {
                foreach($medes->departements as $dep){
                    $kolda[$dep->name] = $dep->medecins;
                }
            }

            elseif ($medes->name == 'Matam') {
                foreach($medes->departements as $dep){
                    $matame[$dep->name] = $dep->medecins;
                }
            }

            elseif ($medes->name == 'Thiès') {
                foreach($medes->departements as $dep){
                    $thies[$dep->name] = $dep->medecins;
                }
            }

            elseif ($medes->name == 'Kafrine') {
                foreach($medes->departements as $dep){
                    $kaffrine[$dep->name] = $dep->medecins;
                }
            }

            elseif ($medes->name == 'Sédhiou') {
                foreach($medes->departements as $dep){
                    $sediou[$dep->name] = $dep->medecins;
                }
            }

            elseif ($medes->name == 'Ziguinchor') {
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
        $specialite = Specialite::all();
        $roles = Role::all();
        return view('admin.admin_crud.add',compact('specialite','roles'));
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
            'nom' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:admins'],
            'phone' => ['required', 'unique:admins'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'image' => 'required|dimensions:min_width=50,min_height=100|image | mimes:jpeg,png,jpg,gif,ijf',
            'status' => ['required'],
            ]);
            // dd($request->all());
        $add_admin = new Admin;
        if($request->hasFile('image'))
        {
            $imageName = $request->image->store('public/Admin');
        }

        $add_admin->nom = $request->nom;
        $add_admin->email = $request->email;
        $add_admin->phone = $request->phone;
        $add_admin->password  = Hash::make($request->password);
        $add_admin->image = $imageName;
        $add_admin->status = 1;
        $add_admin->save();
        // $add_admin->roles()->sync($request->role);
        return redirect()->route('team.index');
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
        $specialite = Specialite::all();
        $roles = Role::all();
        $edit_membre = Admin::find($id);
        return view('admin.admin_crud.edite',compact('edit_membre','specialite','roles'));
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
            'nom' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone' => ['required'],
            ]);
            // dd($request->all());
        $update_admin = Admin::find($id);
        $update_admin->nom = $request->nom;
        $update_admin->email = $request->email;
        $update_admin->phone = $request->phone;
        $update_admin->status = $request->status;
        $update_admin->save();
        $update_admin->roles()->sync($request->role);
        return redirect()->route('team.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Admin::where('id',$id)->delete();
        return back();
    }

    public function today()
    {
        $rvs = Rendez_vous::all();
        $rv_rv_today = [];
        foreach($rvs as $rv){
            if($rv->date_medecin == Carbon::today() ){
                $rv_rv_today[] = $rv;
            }
        }
            return view('admin.option.today',compact('rv_rv_today'));
    }

    public function latested()
    {
        $rvs = Rendez_vous::all();
        $rv_rv_latested = [];
        foreach($rvs as $rv){
            if ($rv->status == 2 && $rv->date_medecin < Carbon::today()) {
                $rv_rv_latested[] = $rv;
            }
        }
        return view('admin.option.latested',compact('rv_rv_latested'));
    }

    public function active_medecin_info(Request $request,$id)
    {
        $active_medecin = Rendez_vous::find($id);
        $active_medecin->option_medecin = 0;
        $active_medecin->save();
        Flashy::success('Les informations ont ete modifier');
        return back();
    }

    public function active_client_info(Request $request,$id)
    {
        $active_client = Rendez_vous::find($id);
        $active_client->option_client = 0;
        $active_client->save();
        Flashy::success('Les informations ont ete modifier');
        return back();
    }

    public function all_rv_detail($id)
    {
        $all_info = Rendez_vous::find($id);
        return view('information.index',compact('all_info'));
    }

    public function ticker(){
        $ticker = Rendez_vous::where(['status'=>1,'status'=>2])->get();
        return view('medecin.ticker.index',compact('ticker'));

    }

}
