<?php

namespace App\Http\Controllers\Admin;

use App\Model\Admin\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TagController extends Controller
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
        $tag_show = Tag::paginate(6);
        return view('admin.tag.index',compact('tag_show'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tag.add');
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
            "nom" => 'required|string',
            "slug" => 'required|string',
        ]);

        $add_tag = new Tag;
        $add_tag->nom = $request->nom;
        $add_tag->slug = $request->slug;
        $add_tag->save();
        return redirect()->route('tag.index');
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
        $tag_edit = Tag::where('id',$id)->first();
        return view('admin.tag.edite',compact('tag_edit'));
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
            "nom" => 'required|string',
            "slug" => 'required|string',
        ]);

        $tag_update = Tag::find($id);
        $tag_update->nom = $request->nom;
        $tag_update->slug = $request->slug;
        $tag_update->save();
        return redirect()->route('tag.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tag::where('id',$id)->delete();
        return redirect()->route('tag.index');
    }
}
