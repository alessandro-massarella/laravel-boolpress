<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\PostInformation;


class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     $posts = Post::all();
    //     return view('posts', compact('posts') );
    // }

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

        return redirect('posts');
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
        $post = Post::find($id);

        return view('edit', compact('post'));

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
        $data = $request->all();
        $editPost = Post::find($id);
        $editPostInformation = new PostInformation();
        $editCategory = new Category();

        $editPost->author = $data['author'];
        $editPost->title = $data['title'];

        $editCategory->title = $data['category_id'];
        $editCategory->slug = 'slug';                                                                                                                                                                                                                                                                                                                                                                                                                                                                    
        $editCategory->save();
        $editPost->category_id = $editCategory['id'];
        
        $editPost->save();

        $editPostInformation->post_id = $editPost['id'];
        $editPostInformation->description = $data['description'];
        $editPostInformation->slug = 'slug';

        $editPostInformation->save();


        return redirect('posts');
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        // Category::destroy($id);
        // PostInformation::destroy($id);
        // Post::destroy($id);


        $post->postsInformation->delete();
        $post->delete();
        $post->category->delete();        

        return redirect('posts');
    }
}
