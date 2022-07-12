<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Symfony\Component\HttpFoundation\Response;

class PostController extends Controller
{
    public function index() 
    {
        return view('blog.index', [
            'posts' => Post::latest()->filter(request(['search']))->paginate(10)->withQueryString(),
            'categories' => Category::all()
        ]);
    }

    public function show(Post $post)
    {
        return view('blog.post', [
            'post' => $post
        ]);
    }

    public function create()
    {
        if(auth()->guest()) {
            abort(Response::HTTP_FORBIDDEN);
        }

        if(auth()->user()->username !== 'AlphaApe')
        {
            abort(Response::HTTP_FORBIDDEN);
        }

        return view('blog.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'title' => 'required',
            'thumbnail' => 'required|image',
            'slug' => ['required', Rule::unique('posts', 'slug')],
            'excerpt' => 'required',
            'body' => 'required',
            'category_id' => ['required', Rule::exists('categories', 'id')]
        ]);

        $attributes['user_id'] = auth()->id();
        $attributes['thumbnail'] = request()->file('thumbnail')->store('public/thumbnails');

        Post::create($attributes);

        return redirect('blog');
    }
}
