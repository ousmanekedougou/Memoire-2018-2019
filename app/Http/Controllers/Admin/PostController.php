<?php

namespace App\Http\Controllers\Admin;

use App\Model\Admin\Tag;
use App\Model\Admin\Post;
use Illuminate\Http\Request;
use App\Model\Admin\Category;
use MercurySeries\Flashy\Flashy;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
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
        $view_post = Post::paginate(12);
        return view('admin.post.index',compact('view_post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tag::all();
        $categorys = Category::all();
        return view('admin.post.add',compact('tags','categorys'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          // dd($request);   
      $validator =  $this->validate($request,[
        'title' => 'required',
        'subtitle' => 'required',
        'slug' => 'required',
        'tags' => 'required',
        'status' => 'required',
        'category' => 'required',
        'image' => 'required|dimensions:min_width=50,min_height=100|image | mimes:jpeg,png,jpg,gif,ijf',
        'detail' => 'required'
    ]);
    $post = new Post;
    $post->title = $request->title;
    $post->subtitle = $request->subtitle;
    $post->slug = $request->slug;
    $post->status = $request->status;
    $post->detail = $request->detail;
    if($request->hasFile('image'))
    {
        $imageName = $request->image->store('public/Post');
    }
    $post->image = $imageName;
    $post->save();
    $post->tags()->sync($request->tags);
    $post->categories()->sync($request->category);
    Flashy::success('Votre Article a ete bien ajouter', 'http://your-awesome-link.com');
    return redirect()->route('post.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post_view = Post::where('id',$id)->first();
        return view('admin.post.view',compact('post_view'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
            $post = Post::with('tags','categories')->where('id',$id)->first();
            $tags = Tag::all();
            $categorys = Category::all();
            return view('admin.post.edite',compact(['tags','categorys','post']));
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
            'title' => 'required',
            'subtitle' => 'required',
            'slug' => 'required',
            'tags' => 'required',
            'category' => 'required',
            'image' => 'required|dimensions:min_width=50,min_height=100|image | mimes:jpeg,png,jpg,gif,ijf',
            'detail' => 'required'
        ]);
        
        $post = Post::find($id);
        $post->title = $request->title;
        $post->subtitle = $request->subtitle;
        $post->slug = $request->slug;
        $post->status = $request->status;
        $post->detail = $request->detail;
        $post->posted_by = Auth::user()->prenom->nom;
        if($request->hasFile('image'))
        {
            $imageName = $request->image->store('public/Post');
        }
        $post->image = $imageName;
        $post->save();
        $post->tags()->sync($request->tags);
        $post->categories()->sync($request->category);
        return redirect()->route('post.index');
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

