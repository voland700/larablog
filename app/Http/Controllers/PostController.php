<?php

namespace App\Http\Controllers;

use App\autor;
use App\category;
use App\post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function alllist()
    {
        $categories = category::has('post')->get();

        $posts = post::where('active', 1)->paginate(5);
        $bestPosts = post::where([['choice', 1], ['active', 1]])->get()->random(4);
        $author = $posts->random()->autor;
        $menu = [];
        foreach ($categories as $category){
           $count = post::where([['category_id', $category->id], ['active', 1]])->count();
           $item = array( 'name'=>$category->name,
                           'slag'=>$category->slag,
                            'count'=>$count
                        );
           array_push($menu, $item);
        }
        $meta = [
            'title' => "Блоги самых интресных и ситаемых авторо рунета, информация обо всем на сете",
            'keys' => "блог, статья, россия, украина, политика, путешенствия, читать, новости, обсуждения",
            'description' => "Статьи, заметки, самых интресных авторов рунета на сайте. Обсуждение новостей и событий происходящих в России, соседних странах и во Всем мире "
        ];


        return view('welcome', compact('posts', 'menu', 'author', 'bestPosts', 'meta'));
    }

    public function listCategory($slag){

        $categories = category::has('post')->get();
        $menu = [];
        foreach ($categories as $category){
            $count = post::where([['category_id', $category->id], ['active', 1]])->count();
            $item = array( 'name'=>$category->name,
                'slag'=>$category->slag,
                'count'=>$count
            );
            array_push($menu, $item);
        }
        $category= category::where('slag', $slag)->firstOrFail();
        $posts = post::where([['category_id', $category->id], ['active', 1]])->paginate(5);
        $bestPosts = post::where([['choice', 1], ['active', 1]])->get()->random(4);

        $author = $posts->random()->autor;

        $meta = [
            'title' => $category->mata_title,
            'keys' => $category->meta_key,
            'description' => $category->mata_description
        ];
        return view('welcome', compact('posts', 'menu', 'author', 'bestPosts', 'meta'));
    }

    public function post($slag){
        $categories = category::has('post')->get();
        $menu = [];
        foreach ($categories as $category){
            $count = post::where([['category_id', $category->id], ['active', 1]])->count();
            $item = array( 'name'=>$category->name,
                'slag'=>$category->slag,
                'count'=>$count
            );
            array_push($menu, $item);
        }

        $post = post::where('slag', $slag)->firstOrFail();
        $author = $post->autor;
        $allPosts = post::where('autor_id', $post->autor_id);
        $otherPosts = $allPosts->where([['id', '!=', $post->id], ['active', 1]])->get()->random(3);
        $prevNext = $allPosts->orderBy('id', 'ASC')->paginate(2);
        $travel = [
            'prev'=>$prevNext[0]['slag'],
            'next'=>$prevNext[1]['slag']
        ];
        $bestPosts = post::where([['choice', 1], ['active', 1]])->get()->random(4);
        $meta = [
            'title' => $post->autor->author_name.' - '.$post->mata_title,
            'keys' => $post->meta_key,
            'description' => $post->mata_description
        ];
        return view('post',  compact('post', 'menu', 'author', 'otherPosts', 'travel', 'bestPosts', 'meta'));
    }

    public function authorPosts($slug){
        $categories = category::has('post')->get();
        $menu = [];
        foreach ($categories as $category){
            $count = post::where([['category_id', $category->id], ['active', 1]])->count();
            $item = array( 'name'=>$category->name,
                'slag'=>$category->slag,
                'count'=>$count
            );
            array_push($menu, $item);
        }

        $author = autor::where('slug', $slug)->firstOrFail();
        $posts = post::where([['autor_id', $author->id], ['active', 1]])->paginate(5);
        $bestPosts = post::where([['choice', 1], ['active', 1]])->get()->random(4);

        $meta = [
            'title' => $author->author_name.' Самыее интересные посты блогера, избранные публикации',
            'keys' => $author->author_name.', блогер, посты, публикации, статьи, интресное, автор, читать',
            'description' => $author->author_name.' - '.$author->author_txt
        ];
        return view('welcome', compact('posts', 'menu', 'author', 'bestPosts', 'meta'));
    }


    public function search(Request $request){

        $categories = category::has('post')->get();
        $bestPosts = post::where([['choice', 1], ['active', 1]])->get()->random(4);
        $author = autor::get()->random();
        $menu = [];
        foreach ($categories as $category){
            $count = post::where([['category_id', $category->id], ['active', 1]])->count();
            $item = array( 'name'=>$category->name,
                'slag'=>$category->slag,
                'count'=>$count
            );
            array_push($menu, $item);
        }
        $qqq =  $request->input('q');
        $posts = post::where([['name', 'LIKE', "%$qqq%"], ['active', 1]])->paginate(5);
        return view('search', compact('posts', 'menu', 'author', 'bestPosts'));
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


    /**
     * Полнотекстовый поиск.
     *
     * @param string $q Строка содержащая поисковый запрос. Может быть несколько фраз разделенных пробелом.
     * @param integer $count Количество найденных результатов выводимых на одной странице (для пагинации)
     * @return \Illuminate\Pagination\LengthAwarePaginator
     */

}
