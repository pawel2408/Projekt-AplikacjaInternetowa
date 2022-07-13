<?php

namespace App\Models;

use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Image extends Model
{
    use HasFactory;

    protected $fillable = ['path', 'post_id'];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public function url()
    {
        return Storage::url($this->path);
    }
}
