<?php

namespace App\Http\Controllers\Admin;

use App\Admin\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
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
        $serviec_all = Service::all();
        return view('admin.service.index',compact('serviec_all'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.service.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request , [
                'nom' => "required|string",
                'image' => "required|image",
                'detail' => "required|string",
        ]);

        $service_add = new Service;

        if($request->hasFile('image'))
        {
            $imageName = $request->image->store('public/Service');
        }

        $service_add->image = $imageName;
        $service_add->nom = $request->nom;
        $service_add->detail = $request->detail;
        $service_add->save();
        return redirect()->route('service.index');
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
        $service_edit = Service::find($id);
        return view('admin.service.edite',compact('service_edit'));
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
        $this->validate($request , [
            'nom' => "required|string",
            'image' => "required|image",
            'detail' => "required|string",
    ]);

    $service_update = Service::find($id);

    if($request->hasFile('image'))
    {
        $imageName = $request->image->store('public/Service');
    }

    $service_update->image = $imageName;
    $service_update->nom = $request->nom;
    $service_update->detail = $request->detail;
    $service_update->save();
    return redirect()->route('service.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Service::find($id)->delete();
        return back();
    }
}
