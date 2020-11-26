<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Carbon\Carbon;
use App\Mode\User\Comment;
use App\Model\Admin\Admin;
use App\Model\User\Contact;
use App\Model\Admin\Hopital;
use App\Model\Admin\Medecin;
use Illuminate\Http\Request;
use App\Model\Admin\Rendez_vous;
use App\Http\Controllers\Controller;

class StatistiqueController extends Controller
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
        $patient = User::all();
        $medecins = Medecin::where('status',null);
        $medecin_chef = Medecin::where('status',1);
        $admins = Admin::all();
        $rv_t = Rendez_vous::where('status',2);
        $rv_j = Rendez_vous::where(['status'=>1 && 'date_medecin' == Carbon::today() ]);
        $hp = Hopital::all();
        $comments = Comment::all();
        $contact = Contact::all();
        return view('admin.statistique.index',compact(
            'patient','medecins','medecin_chef','admins','rv_t','rv_j','hp','comments','contact'
        ));
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
