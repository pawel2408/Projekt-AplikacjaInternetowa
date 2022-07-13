<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Image;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Requests\StorePost;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;

class PostController extends Controller
{
    public function index() 
    {
        return view('blog.index', [
            'posts' => Post::latest()->filter(request(['search', 'category']))->paginate(10)->withQueryString(),
            'categories' => Category::all(),
            'currentCategory' => Category::where('slug', request('category'))->first()
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
        return view('/blog.create');
    }

    public function store(StorePost $request)
    {
        $attributes = request()->validate([
            'title' => 'required',
            'slug' => ['required', Rule::unique('posts', 'slug')],
            'excerpt' => 'required',
            'body' => 'required',
            'category_id' => ['required', Rule::exists('categories', 'id')]
        ]);
        $attributes['user_id'] = auth()->id();
        $post = Post::create($attributes);

        // $hasFile = $request->hasFile('thumbnail');
        // dump($hasFile);
        
        if($request->hasFile('thumbnail'))
        {
            $path = $request->file('thumbnail')->store('thumbnails');
            $post->image()->save(
                Image::create(['path' => $path])
            );
        }
        // if ($hasFile) {
        //     $file = $request->file('thumbnail');
        //     // dump($file);
        //     // dump($file->getClientMimeType());
        //     // dump($file->getClientOriginalExtension());
            
        //     // dump($file->store('thumbnails'));
        //     // // dump(Storage::putFile('thumbnails', $file));

        //     // $num1 = dump($file->storeAs('thumbnails', $post->title . '.' . $file->guessExtension()));
        //     // $num2 = dump(Storage::disk('local')->putFileAs('thumbnails', $file, $post->id . '.' . $file->guessExtension()));

        //     // dump(Storage::url($num1));
        //     // dump(Storage::disk('local')->url($num2));
        // }
        // die;

        return redirect()->route('blog', ['post' => $request->id]);
    }
}