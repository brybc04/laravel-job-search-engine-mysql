<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\jobPosting;

class CVcontroller extends Controller
{

// public function __construct()
//     {
//         $this->middleware('auth',  ['except' => ['posts', 'home']]);
//     }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = jobPosting::orderBy('created_at', 'desc')->paginate(10);
        return view('posts.index')->with('posts', $posts);

        // return Post::all();
        // return view('cv.mycv');
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
        $this->validate($request, [
            'title' => 'required',
            'compName' => 'required',
            'location' => 'required',

        ]);
            $post = new jobPosting;
            $post -> title = $request->input('title');
            $post-> description = $request->input('description');
            $post-> salary = $request->input('salary');
            $post-> type = $request->input('type');
            $post-> skills = $request->input('skills');
            $post-> compName = $request->input('compName');
            $post-> compDescription = $request->input('compDescription');
            $post-> location = $request->input('location');
            $post-> date = $request->input('date');
            $post->user_id = auth()->user()->id;
            $post-> save();

            return redirect('/posts')->with('success', 'Job Created');

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
            // $this->validate($request, [
        //     'title' => 'required',
        //     'compName' => 'required',
        //     'location' => 'required',

        // ]);
        //     $post = jobPosting::find($id);
        //     $post-> title = $request->input('title');
        //     $post-> description = $request->input('description');
        //     $post-> salary = $request->input('salary');
        //     $post-> type = $request->input('type');
        //     $post-> skills = $request->input('skills');
        //     $post-> compName = $request->input('compName');
        //     $post-> compDescription = $request->input('compDescription');
        //     $post-> location = $request->input('location');
        //     $post-> save();

        //     return redirect('/posts')->with('success', 'Job Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = jobPosting::find($id);
        $post->delete();
        return redirect('/posts')->with('success', 'Job Deleted');
    }

}
