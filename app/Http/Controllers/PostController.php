<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::paginate(4);
        return view('index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => ['required', 'max:2028', 'image'],
            'title' => ['required', 'max:255'],
            'category_id' => ['required'],
            'description' => ['required']
        ]);

        $fileName = time() . '_' . $request->image->getClientOriginalName();
        $filePath = $request->file('image')->storeAs('uploads', $fileName, 'public');

        $post = new Post();
        $post->title = $request->title;
        $post->category_id = $request->category_id;
        $post->description = $request->description;
        $post->image = $filePath;
        $post->save();

        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {   
        $post = Post::findOrFail($id);
        return view('show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::findOrFail($id);
        $categories = Category::all();
        return view('edit', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    
    public function update(Request $request, string $id)
    {
    $request->validate([
        'title' => ['required', 'max:255'],
        'category_id' => ['required'],
        'description' => ['required']
    ]);

    $post = Post::findOrFail($id);

    if ($request->hasFile('image')) {
        $request->validate([
            'image' => ['required', 'max:2028', 'image']
        ]);

        // Store the new image
        $fileName = time() . '_' . $request->image->getClientOriginalName();
        $filePath = $request->file('image')->storeAs('uploads', $fileName, 'public');

        // Delete the old image if it exists
        if ($post->image && File::exists(public_path('storage/' . $post->image))) {
            File::delete(public_path('storage/' . $post->image));
            }

            // Update the post's image path
            $post->image = $filePath;
        }

            $post->title = $request->title;
            $post->category_id = $request->category_id;
            $post->description = $request->description;
            $post->save();

        return redirect()->route('posts.index')->with('success', 'Post updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect()->route('posts.index')->with('success', 'Post deleted successfully');
    }

    public function trashed(){
            $posts = Post::onlyTrashed()->get();
        return view('trash',compact('posts'));
    }

    public function restore($id){

        $post = Post::onlyTrashed()->findOrFail($id);
        $post->restore();

        return redirect()->route('posts.index')->with('success', 'Post restored successfully');


    }

    public function forcedelete($id){
        $post = Post::onlyTrashed()->findOrFail($id);
        $post->forceDelete();
        File::delete(public_path('storage/' . $post->image));
        return redirect()->route('posts.trashed')->with('success', 'Post permanently deleted successfully');
    }
}
