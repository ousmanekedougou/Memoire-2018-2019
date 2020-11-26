<?php

namespace App\Http\Controllers\Medecin;

use App\User;
use DateTime;
use Carbon\Carbon;
use App\Model\Admin\Hopital;
use App\Model\Admin\Medecin;
use Illuminate\Http\Request;
use App\Model\Admin\Specialite;
use App\Model\Admin\Rendez_vous;
use MercurySeries\Flashy\Flashy;
use App\Model\Admin\Disponibilite;
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
        $this->middleware('auth:medecin');
    }
    public function index()
    {
        // dd(Auth::guard('web')->user());
        $notification_medecin = Rendez_vous::where(['medecin_id'=>Auth::guard('medecin')->user()->id,'view_medecin'=>1])->get();
        if($notification_medecin->count() > 0){
            Flashy::primary('Vous avez de novelles notifications');
        }
        $rvs = Rendez_vous::where('medecin_id',Auth::guard('medecin')->user()->id)->orderBy('id','ASC')->get();
            $client_rv_today = [];
        foreach($rvs as $rv){
            if($rv->date_medecin == Carbon::today() && $rv->status == 1 ){
                $client_rv_today[] = $rv;
            }
        }
        return view('medecin.index',compact('client_rv_today','notification_medecin'));
    }

    public function asked()
    {
        $rvs = Rendez_vous::where('medecin_id',Auth::guard('medecin')->user()->id)->orderBy('id','ASC')->get();
            $client_rv_demande = [];
        foreach($rvs as $rv){
            if($rv->date_medecin == ''  &&  $rv->status == 0){
                $client_rv_demande[] = $rv; 
            }
        }
        return view('medecin.option.asked',compact('client_rv_demande'));
    }

    public function weiting()
    {
        $rvs = Rendez_vous::where('medecin_id',Auth::guard('medecin')->user()->id)->orderBy('id','ASC')->get();
        $client_rv_en_cour = [];
        foreach($rvs as $rv){
            if ($rv->date_medecin > carbon::today() && $rv->status == 1) {
                $client_rv_en_cour[] = $rv;
            }
        }
        return view('medecin.option.weiting',compact('client_rv_en_cour'));
    }

    public function lasted()
    {
        $rvs = Rendez_vous::where('medecin_id',Auth::guard('medecin')->user()->id)->orderBy('id','ASC')->get();
          
            $lasted = [];
        foreach($rvs as $rv){
            if ($rv->status == 2 && $rv->option_medecin == 0 ) {
                $lasted[] = $rv;
            }
        }
        return view('medecin.option.lasted',compact('lasted'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $specialite = Specialite::all();
        $disponibilite = Disponibilite::all();
        return view('medecin.medecin.add',compact('disponibilite'));
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

        $add_medecin = new Medecin;
        $add_medecin->prenom = $request->prenom;
        $add_medecin->email = $request->email;
        $add_medecin->phone = $request->phone;
        $add_medecin->prix = $request->prix;
        $add_medecin->password = Hash::make($request->password);
        $add_medecin->status = 0;
        $add_medecin->proffession = $request->proffession;
        $add_medecin->specialite = $request->specialite;
        $add_medecin->departement_id = $request->departement;
        $add_medecin->hopital_id = $request->hopital;
        $add_medecin->save();
        $add_medecin->disponibilites()->sync($request->disponibilite);
        Flashy::success('Votre Medecin a ete ajouter');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client_show = Rendez_vous::where('id',$id)->first();
        return view('medecin.show',compact('client_show'));
    }

    public function client_info($id)
    {
        $all_info = Rendez_vous::where(['user_id'=>$id,'status'=> 2 ,'option_medecin'=>0])->orderBy('id','DESC')->get();
        return view('information.index',compact('all_info'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit_client_rv = Rendez_vous::where('id',$id)->first();
        return view('medecin.edit',compact('edit_client_rv'));
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
            'date' => 'required|date',
            'time' => 'required',
        ]);

        $fixer_client_rv = Rendez_vous::find($id);
        $user_id = Rendez_vous::where('user_id',$fixer_client_rv->user_id)->where('date_medecin', '>' ,Carbon::today())->get();
        $date_verified = '';
        $date_existe = '';
        $date_verified =  new DateTime($request->date);
        $date_existe = $date_verified->format('Y-m-d H:i:s');
        // dd($user_id[0]->date_medecin);
        // dd($date_existe);
        foreach($user_id as $us_id){
            // dd($us_id->date_medecin);
            // dd($us_id->count());
            // dd($date_existe);
           if ($us_id->date_medecin == $date_existe ) {
               Flashy::error('Ce client a un rendez vous a cette date');
               return back();
           }else{
                $date_existe = $request->date;
           }
        }
        // dd($request->date);
        $fixer_client_rv->date_medecin = $date_existe;
        $fixer_client_rv->heure_medecin = $request->time;
        $fixer_client_rv->view_user = 1;
        $fixer_client_rv->status = 1;
        $fixer_client_rv->save();
        Flashy::success('Votre rendez-vous a ete fixer');
        return redirect()->route('medecin.weiting');

    }

    public function prochain($id){
        $edit_client_rv = Rendez_vous::where('id',$id)->first();
        return view('medecin.prochain',compact('edit_client_rv'));
    }

    public function prochain_rendez_vous(Request $request , $id){
        $this->validate($request,[
            'date' => 'required|date',
            'time' => 'required',
            'objet' => 'required',
        ]);

        $fixer_client_rv = Rendez_vous::find($id);
        $fixer_client_rv->date_medecin = $request->date;
        $fixer_client_rv->heure_medecin = $request->time;
        $fixer_client_rv->objet = $request->objet;
        $fixer_client_rv->view_user = 1;
        $fixer_client_rv->status = 1;
        $fixer_client_rv->save();
        Flashy::success('Votre prochain rendez-vous a ete fixer');
        return redirect()->route('medecin.home');
    }


    public function valider(Request $request, $id)
    {
        $valider = Rendez_vous::find($id);
        $valider->status = 2;
        $valider->save();
        Flashy::success('Ce rendez-vous a ete a votre historique');
        return redirect()->route('medecin.home');

    }


    public function medecin_option(Request $request, $id)
    {
        $option_medecin = Rendez_vous::find($id);
        $option_medecin->option_medecin = 1;
        $option_medecin->save();
        Flashy::error('Ce rendez-vous a ete supprime de votre historique');
        return redirect()->route('medecin.home');

    }

    public function info_medecin(){
        $all_medecin = Medecin::All();

        foreach($all_medecin  as $med)
        {
            $medecin_region=[];
            $medes = $med->departement->region;
            $auth_medecin = Auth::guard('medecin')->user()->departement->region;
            if ($medes->name == $auth_medecin->name) {
                foreach($medes->departements as $dep){
                    $medecin_region[$dep->name] = $dep->medecins;
                }
            }
        }
        return view('medecin.medecin.index',compact('medecin_region'));
    }

    public function medecin_region_view($id){
        $medecin_region_view = Medecin::find($id);
        return view('medecin.medecin.show',compact('medecin_region_view'));
    }

    public function view(Request $request,$id)
    {
        $client_show = Rendez_vous::find($id);
            $client_show->view_medecin = 0;
            $client_show->save();
            return view('medecin.show',compact('client_show'));
    }

    public function ticker(){
        $ticker = Rendez_vous::where(['medecin_id'=>Auth::guard('medecin')->user()->id,'status'=>1,'status'=>2])->get();
        return view('medecin.ticker.index',compact('ticker'));

    }

    public function valider_ticker(Request $request, $id)
    {
        $ticker = Rendez_vous::where(['id'=> $id,'status'=>1])->first();
        if ($ticker->medecin_id == Auth::guard('medecin')->user()->id) {
            
            $ticker->prix = $ticker->medecin->prix;
            $ticker->save();
            Flashy::success('Le Ticker a ete valider');
            return back();
        }
     
    }

    public function hopital(){
        return view('medecin.hopital.add');
    }

    public function add_hopital(Request $request){
        $validator = $this->validate($request,[
            'name' => 'required|string',
            'departement' => 'required|string',
        ]);
        $add_opital = new Hopital;
        $add_opital->name = $request->name;
        $add_opital->departement_id = $request->departement;
        $add_opital->save();
        Flashy::success('Votre hopital a ete ajouter');
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
        //
    }
}
