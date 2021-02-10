<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Post;
use App\PostInformation;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('posts');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $newPost = new Post();
        $newPostInformation = new PostInformation();
        $newCategory = new Category();

        $newPost->author = $data['author'];
        $newPost->title = $data['title'];

        $newCategory->title = $data['category_id'];
        $newCategory->slug = 'slug';
        $newCategory->save();
        $newPost->category_id = $newCategory['id'];
        
        $newPost->save();

        $newPostInformation->post_id = $newPost['id'];
        $newPostInformation->description = $data['description'];
        $newPostInformation->slug = 'slug';

        $newPostInformation->save();






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
