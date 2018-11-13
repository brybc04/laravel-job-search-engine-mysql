<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\jobPosting;


class PagesController extends Controller
{
/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth',  ['except' => ['posts', 'home']]);
    }

    public function home() {
        return view('pages.home');
    }

    public function jobposts() {
        return view('pages.jobposts');
    }

    public function createjob() {
        return view('posts.createjob');
    }

    public function createcv() {
        return view('cv.createcv');
    }

    public function mycv() {
        return view('posts.mycv');
    }

    public function edit() {
        return view('cv.edit');
    }

    public function search($searchKey) {

        $search = jobPosting::search($searchKey)->get('searchKey');
        return view('pages.search', compact('search'));
    }


    // public function userEdit() {
    //     return view('users.edit');
    // }





}
