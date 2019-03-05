<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Workers;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.admin_page');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.newPost');
    }
    public function adminPosts()
    {
        $workers = Workers::all();
        return view('admin.posts')->with('workers', $workers);
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
            'name' => 'required',
            'specialization' => 'required',
            'lastName' => 'required',
            'serviceName' => 'required',
            'city' => 'required',
            'picture' => 'required'
        ]);

        //Create post
        $post = new Workers();
        $post->name = $request->input('name');
        $post->lastName = $request->input('lastName');
        $post->serviceName = $request->input('serviceName');
        $post->specialization = $request->input('specialization');
        $post->city = $request->input('city');
        $post->picture = $request->input('picture');
        $post->save();

        return redirect('/admin/posts');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $worker = Workers::find($id);
        $worker->delete();
        return redirect('/admin/posts');
    }
}
