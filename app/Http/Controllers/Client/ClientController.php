<?php

namespace App\Http\Controllers\Client;

use App\User;
use Carbon\Carbon;
use App\Model\Admin\Region;
use Illuminate\Support\Str;
use App\Model\Admin\Medecin;
use Illuminate\Http\Request;
use App\Model\Admin\Rendez_vous;
use MercurySeries\Flashy\Flashy;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     * 
     */

    public function __construct(){
        $this->middleware('auth:web');
    }

    public function index()
    {
        $all_medecin = Medecin::All();
        foreach($all_medecin  as $med)
        {
            $medes = $med->departement->region;
            if ($medes->name == Auth::guard('web')->user()->departement->region->name) {
                foreach($medes->departements as $dep){
                    $dep_medecin[$dep->name] = $dep->medecins;
                }
                return view('client.home',compact('dep_medecin'));
            }else{
                return redirect()->route('client_region');
            }
        }
    }

    public function client_region(){
      
        $all_medecin = Medecin::All();
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

            elseif ($medes->name == 'Kaffrine') {
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
        // dd($kedougou['Kedougou'][0]);
        $notification_client = Rendez_vous::where(['user_id'=>Auth::guard('web')->user()->id,'view_user'=>1])->get();
        if($notification_client->count() > 0){
            Flashy::primary('Vous avez de novelles notifications');
        }
        return view('client.home_client',compact(['kaolack','kedougou',
        'dakar','thies','tamba','diourbel','saintlouis','kolda','matame','fatick','louga','ziguinchore','sediou','kaffrine']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('client.demander');
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
            'objet' => "required|string"
        ]);
        $rv = Rendez_vous::where(['user_id'=>Auth::guard('web')->user()->id,'medecin_id'=>$request->medecin,'status'=>0]);
            if($rv->count() > 0){
                Flashy::error('Vous avez deja une demande en cours avec ce medecin');
                return redirect()->route('client.home');
            }
            else{
                    $demander_add = new Rendez_vous;
                    $demander_add->objet = $request->objet;
                    $demander_add->medecin_id = $request->medecin;
                    $demander_add->user_id = Auth::user()->id;
                    $demander_add->view_medecin = 1;
                    $demander_add->save();
                    Flashy::success('Votre demander a ete ernregistre');
                    return redirect()->route('client.home');
                    
                }
            

    }
    

    public function ticker(){
        $ticker = Rendez_vous::where('user_id', '=',Auth::guard('web')->user()->id)
        ->where('prix', '>', 0)->get();
        return view('client.ticker.index',compact('ticker'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $medecin_show = Medecin::find($id);
        return view('client.show',compact('medecin_show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $medecin_demander = Medecin::find($id);
        return view('client.demander',compact('medecin_demander'));
    }

    public function view(Request $request,$id)
    {
        $validate_client = Rendez_vous::find($id);
            $validate_client->view_user = 0;
            $validate_client->save();
            return view('client.notification',compact('validate_client'));
    }

    public function lasted()
    {
        $rvs = Rendez_vous::where('user_id',Auth::guard('web')->user()->id)->orderBy('id','DESC')->get();
        $lasted = [];
        foreach($rvs as $rv){
            if ($rv->status == 2 &&  $rv->option_client == 0 && $rv->view_user == 0  ) {
                $lasted[] = $rv;
            }
        }
        return view('client.option.lasted',compact('lasted'));
    }

    public function today()
    {
        $rvs = Rendez_vous::where('user_id',Auth::guard('web')->user()->id)->orderBy('id','DESC')->get();
        $today = [];
        foreach($rvs as $rv){
            if ($rv->status == 1 && $rv->date_medecin == Carbon::today() && $rv->option_client == 0  ) {
                $today[] = $rv;
            }
        }
        return view('client.option.today',compact('today'));
    }

    public function asked()
    {
        $rvs = Rendez_vous::where('user_id',Auth::guard('web')->user()->id)->orderBy('id','DESC')->get();
        $asked = [];
        foreach($rvs as $rv){
            if ($rv->status == 0 && $rv->date_medecin == null && $rv->objet != null && $rv->heure_medecin == null) {
                $asked[] = $rv;
            }
        }
        return view('client.option.asked',compact('asked'));
    }

    public function view_asked($id){
        $view_asked = Rendez_vous::where('user_id',Auth::guard('web')->user()->id && 'id',$id)->first();
        return view('client.option.view_asked',compact('view_asked'));
    }

    public function weiting()
    {
        $rvs = Rendez_vous::where('user_id',Auth::guard('web')->user()->id)->orderBy('id','DESC')->get();
        $weiting = [];
        foreach($rvs as $rv){
            if ($rv->status == 1 && $rv->date_medecin > Carbon::today() && $rv->option_client == 0  ) {
                $weiting[] = $rv;
            }
        }
        return view('client.option.weiting',compact('weiting'));
    }

    public function view_weiting(){
        $rvs = Rendez_vous::where('user_id',Auth::guard('web')->user()->id)->orderBy('id','DESC')->get();
        $view_weiting = '';
        foreach($rvs as $rv){
            if ($rv->status == 1 && $rv->date_medecin > Carbon::today() && $rv->option_client == 0  ) {
                $view_weiting = $rv;
            }
        }
        return view('client.option.view_weiting',compact('view_weiting'));
    }

    public function medecin_info($id)
    {
        $all_info = Rendez_vous::where(['user_id'=>$id,'status'=> 2 ,'option_client'=>0])->get();
        return view('information.index',compact('all_info'));
    }

    public function option_client(Request $request, $id)
    {
        $client_option = Rendez_vous::find($id);
        $client_option->option_client = 1;
        $client_option->save();
        Flashy::error('Ce rendez-vous a ete supprime de votre historique');
        return redirect()->route('client.home');

    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
 

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Rendez_vous::find($id)->delete();
        Flashy::success('Votre Rendez-Vous a ete Supprimer');
        return back();
    }
}
