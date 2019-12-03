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
        $posts = post::paginate(5);
        $author = $posts->random()->autor;

        $menu = [];
        foreach ($categories as $category){
           $count = post::where('category_id', $category->id)->count();
           $item = array( 'name'=>$category->name,
                           'slag'=>$category->slag,
                            'count'=>$count
                        );
           array_push($menu, $item);
        }
        return view('welcome', compact('posts', 'menu', 'author'));
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
        $posts = post::where('category_id', $id->id)->paginate(5);
        $author = $posts->random()->autor;
        return view('welcome', compact('posts', 'menu', 'author'));

    }

    public function post($slag){
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

        $post = post::where('slag', $slag)->firstOrFail();
        $author = $post->autor;
        $allPosts = post::where('autor_id', $post->autor_id);
        $otherPosts = $allPosts->where('id', '!=', $post->id)->get()->random(3);
        $prevNext = $allPosts->orderBy('id', 'ASC')->paginate(2);
        $travel = [
            'prev'=>$prevNext[0]['slag'],
            'next'=>$prevNext[1]['slag']
        ];




        return view('post',  compact('post', 'menu', 'author', 'otherPosts', 'travel'));
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
