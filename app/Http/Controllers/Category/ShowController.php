<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Category $category)
    {
        $posts = Post::where('category_id', $category['id'])->get();
        return view ('category.show', compact('category', 'posts'));
    }
}
