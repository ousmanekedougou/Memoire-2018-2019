<?php

namespace App\Http\Controllers\Admin;

use App\Model\Admin\Social;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SocialController extends Controller
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
        return view('admin.social.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.social.add');
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
            'nom' => 'required|unique:socials',
            'lien' => 'required|unique:socials',
            
        ]);

        $social_add = new Social;
        $social_add->nom = $request->nom;
        $social_add->lien = $request->lien;
        $social_add->save();
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
        $reseau_view = Social::where('id',$id)->first();
        return view('admin.social.edite',compact('reseau_view'));
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
            'nom' => 'required|unique:socials',
            'lien' => 'required|unique:socials',
            
        ]);

        $social_add = Social::find($id);
        $social_add->nom = $request->nom;
        $social_add->lien = $request->lien;
        $social_add->save();
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
        Social::where('id',$id)->delete();
        return back();
    }
}
