<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use App\Models\Tag;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use Doctrine\DBAL\Schema\View;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $postTable = Post::with('category', 'tags')->paginate(10);
        //dd($postTable);
        return view('admin.posts.index', compact('postTable'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.posts.create' , compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequest $request)
    {   
        $data = $request->validated();
        $slug = Str::slug($data['title'], '-');
        $data['slug'] = $slug;
        if ($request->hasFile('image')) {
            $image_path = Storage::put('images', $request->image);
            $data['image'] = asset('storage/' . $image_path);
        };
        $post = Post::create($data);

        if($request->has('tags')){
            $post->tags()->attach($request->tags);
        }
        //dd($data);
        //dd($post);
        //dd($request->tags);

    return redirect()->route('admin.posts.show', $post->slug);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('admin.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $categories = Category::all();
        return view('admin.posts.edit', compact('post','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePostRequest  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        $data = $request->validated();
        $slug = Str::slug($data['title'], '-');
        $data['slug'] = $slug;
        if ($request->hasFile('image')) {
            $image_path = Storage::put('images', $request->image);
            $data['image'] = asset('storage/' . $image_path);
        }
        $post->update($data);
        //dd($post);

        return redirect()->route('admin.posts.show', $post->slug)->with('message', "$post->title Il post è stato aggiornato con successo");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        if ($post->image) {
            $datogliere = "http://127.0.0.1:8000/storage/";
            $imagetoremove = str_replace($datogliere, '', $post->image);
            //dd($imagetoremove);
            Storage::delete($imagetoremove);
        }
        
        $post->delete();
        return redirect()->route('admin.posts.index')->with('message', "$post->title deleted successfully.");
    }
}
