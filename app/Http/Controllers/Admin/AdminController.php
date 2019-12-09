<?php

namespace App\Http\Controllers\Admin;

use App\post;
use App\autor;
use App\category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function list(){
        $posts = post::paginate(25);
        return view('admin.list', compact('posts'));
    }

    public function postnew(){
        $authors = autor::select('id', 'author_name')->get();
        $categotries = category::select('id', 'name')->get();
        return view('admin.postnew', compact('authors', 'categotries'));
    }




    public function authorsList(){
        $authors = autor::all();
        return view('admin.authorslist', compact('authors'));
    }

    public function categorieslist(){
        $categoriesAll = category::has('post')->get();
        $categories = [];
        foreach ($categoriesAll as $category){
            $count = post::where('category_id', $category->id)->count();
            $item = array(
                'id' =>$category->id,
                'name'=>$category->name,
                'count'=>$count
            );
            array_push($categories, $item);
        }
        return view('admin.categorieslist', compact('categories'));
    }



    public function categorynew(){
        return view('admin.categorynew');
    }

    public  function  authornew(){
        return view('admin.authornew');
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
        //
    }
}
