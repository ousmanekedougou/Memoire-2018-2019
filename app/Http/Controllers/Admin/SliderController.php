<?php

namespace App\Http\Controllers\Admin;

use App\Model\Admin\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SliderController extends Controller
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
        $slider = Slider::where('role','slider')->get();
        $slider_ins = Slider::where('role','inscription')->get();
        $slider_login = Slider::where('role','login')->get();
        $slider_contact = Slider::where('role','contact')->get();
        return view('admin.slider.index',compact('slider','slider_ins','slider_login','slider_contact'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     
        return view('admin.slider.add');
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
            'image' => 'required|dimensions:min_width=50,min_height=100|image | mimes:jpeg,png,jpg,gif,ijf',
            'role' => 'required|string'
        ]);

        $add_slider = new Slider;
        if($request->hasFile('image'))
        {
            $imageName = $request->image->store('public/Slider');
        }
        $add_slider->image = $imageName;
        $add_slider->role = $request->role;
        $add_slider->save();
        return redirect()->route('slider.index');
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
        $edit_slide = Slider::where('id',$id)->first();
        return view('admin.slider.edite',compact('edit_slide'));
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
            'image' => 'required|dimensions:min_width=50,min_height=100|image | mimes:jpeg,png,jpg,gif,ijf',
            'role' => 'required|string'
        ]);

        $update_slider = Slider::find($id);
        if($request->hasFile('image'))
        {
            $imageName = $request->image->store('public/Slider');
        }
        $update_slider->image = $imageName;
        $update_slider->role = $request->role;
        $update_slider->save();
        return redirect()->route('slider.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Slider::where('id',$id)->delete();
        return back();
    }
}
