<?php

namespace App\Http\Controllers\Admin;

use App\Model\Admin\Permission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class PermissionController extends Controller
{

       /**
     * Create a new controller instance.
     *
     * @return void
     */


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
        $permission = Permission::all();
        return view('admin.permission.index',compact('permission'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.permission.add');
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
            'nom' => 'required|max:50',
            'for' => 'required'
        ]);
        $permission = new Permission;
        $permission->nom = $request->nom;
        $permission->for = $request->for;
        $permission->save();
        return redirect(route('permission.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Admins\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function show(Permission $permission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Admins\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $permission = Permission::find($id);
        return view('admin.permission.edit',compact('permission'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Admins\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $this->validate($request,[
            'nom' => 'required|max:50',
            'for' => 'required|max:50'
        ]);
        $permission = Permission::find($id);
        $permission->nom = $request->nom;
        $permission->for = $request->for;
        $permission->save();
        return redirect(route('permission.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Admins\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Permission::where('id',$id)->delete();
        return redirect()->back();
    }
}
