<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Model\Admin\Role;
use App\Model\Admin\Admin;
use App\Model\Admin\Medecin;
use Illuminate\Http\Request;
use App\Model\Admin\Specialite;
use App\Http\Controllers\Controller;

class TeamController extends Controller
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
        $admin_membre = Admin::All();
        $medecin_membre = Medecin::All();
        $user_membre = User::All();
        return view('admin.team.index',compact('admin_membre','medecin_membre','user_membre'));
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
        return view('admin.team.add',compact('specialite','roles'));
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
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'image' => 'required|dimensions:min_width=50,min_height=100|image | mimes:jpeg,png,jpg,gif,ijf',
            'status' => ['string'],
        ]);

        if($request->hasFile('image'))
        {
            $imageName = $request->image->store('public/Admin');
        }
        $request['password'] = bcrypt($request->password);
        $add_admin = User::create($request->all());
        $add_admin->roles()->sync($request->role);
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
        $edit_membre = User::where('id',$id)->first();
        return view('admin.team.edite',compact('edit_membre','specialite','roles'));
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
        // dd($request->all());
        $validator = $this->validate($request , [
            'prenom' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone' => ['required'],
            
        ]);

        if($request->hasFile('image'))
        {
            $imageName = $request->image->store('public/Admin');
        }
        $request['password'] = bcrypt($request->password);
        $update_admin = User::where('id',$id)->update($request->except('_token','_method','role'));
        User::find($id)->roles()->sync($request->role);
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
        User::where('id',$id)->delete();
        return back();
    }
}
