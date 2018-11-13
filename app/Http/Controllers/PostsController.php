<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
// use App\jobPosting;
use App\User;
use DB;

class PostsController extends Controller
{



    public function __construct()
    {
        $this->middleware('auth',  ['except' => ['posts', 'home']]);
    }


   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {

          $posts = Post::paginate(10);
        //   $posts = Post::orderBy('created_at', 'desc')->paginate(10);
        // return Post::all();
        return view('cv.mycv')->with('posts', $posts);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cv.home');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this -> validate($request, [
            'mainSkills' => 'required',
            'workExperience' => 'required',
            'education' => 'required'

        ]);
            $post = new Post;
            $post -> mainSkills = $request->input('mainSkills');
            $post-> workExperience = $request->input('workExperience');
            $post-> education = $request->input('education');
            $post->user_id = auth()->user()->id;
            $post-> save();

            return redirect('/home')->with('success', 'CV Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts = jobPosting::find($id);
        return view('posts.show')->with('posts', $posts);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = jobPosting::find($id);
        return view('posts.editjob')->with('post', $post);
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
        $this -> validate($request, [
            'mainSkills' => 'required',
            'workExperience' => 'required',
            'education' => 'required'

        ]);
            $post = Post::find($id);
            $post -> mainSkills = $request->input('mainSkills');
            $post-> workExperience = $request->input('workExperience');
            $post-> education = $request->input('education');
            $post-> save();

            return redirect('/home')->with('success', 'CV Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
