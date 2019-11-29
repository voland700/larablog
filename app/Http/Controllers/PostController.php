<?php

namespace App\Http\Controllers;

use App\category;
use App\post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function alllist()
    {
        $categories = category::has('post')->get();
        $posts = post::paginate(15);

        $menu = [];
        foreach ($categories as $category){
           $count = post::where('category_id', $category->id)->count();
           $item = array( 'name'=>$category->name,
                           'slag'=>$category->slag,
                            'count'=>$count
                        );
           array_push($menu, $item);
        }
        return view('list', compact('posts', 'menu'));
    }

    public function listCategory($slag){

        $categories = category::has('post')->get();
        $menu = [];
        foreach ($categories as $category){
            $count = post::where('category_id', $category->id)->count();
            $item = array( 'name'=>$category->name,
                'slag'=>$category->slag,
                'count'=>$count
            );
            array_push($menu, $item);
        }
        $id = category::where('slag', $slag)->firstOrFail();
        $posts = post::where('category_id', $id->id)->paginate(15);
        return view('list', compact('posts', 'menu'));

    }

    public function post($slag){
        $post = post::where('slag', $slag)->firstOrFail();
        return view('post',  compact('post'));
    }











    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(post $post)
    {
        //
    }
}
