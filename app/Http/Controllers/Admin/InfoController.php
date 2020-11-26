<?php

namespace App\Http\Controllers\Admin;

use App\Model\Admin\Info;
use App\Model\Admin\Social;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InfoController extends Controller
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
        $infos = Info::all();
        $social_reseau = Social::all();
        return view('admin.info.index',compact('infos','social_reseau'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.info.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator =  $this->validate($request,[
            'email' => 'required|email|unique:infos',
            'phone' => 'required|unique:infos',
            'adresse' => 'required|unique:infos',
            'adresse' => 'required|unique:infos',
            'bp' => 'required|unique:infos',
            'fax' => 'required|unique:infos',
            
        ]);

        $info_add = new Info;
        $info_add->email = $request->email;
        $info_add->phone = $request->phone;
        $info_add->adresse = $request->adresse;
        $info_add->bp = $request->bp;
        $info_add->fax = $request->fax;
        $info_add->save();
        return redirect()->route('info.index');
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
        $info_view = Info::where('id',$id)->first();
        return view('admin.info.edite',compact('info_view'));
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
        $validator =  $this->validate($request,[
            'email' => 'required|email|unique:infos',
            'phone' => 'required|unique:infos',
            'adresse' => 'required|unique:infos',
            'adresse' => 'required|unique:infos',
            'bp' => 'required|unique:infos',
            'fax' => 'required|unique:infos',
            
        ]);

        $info_add = Info::find($id);
        $info_add->email = $request->email;
        $info_add->phone = $request->phone;
        $info_add->adresse = $request->adresse;
        $info_add->bp = $request->bp;
        $info_add->fax = $request->fax;
        $info_add->save();
        return redirect()->route('info.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Info::where('id',$id)->delete();
        return back();
    }
}
