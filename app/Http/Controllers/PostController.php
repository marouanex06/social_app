<?php
namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class PostController extends Controller
{
    use AuthorizesRequests;
    public function index() {
        $posts = Post::with(['user', 'likes'])->latest()->get();
        return view('posts.index', compact('posts'));
    }

    public function store(Request $request) {
        $request->validate(['content' => 'required']);

        Post::create([
            'content' => $request->content,
            'user_id' => session('user_id'),
        ]);

        return redirect('/posts');
    }

   public function update(Request $request, $id) {
    $post = Post::findOrFail($id);
    
    $this->authorize('update', $post);
    
    $post->update(['content' => $request->content]);
    return redirect('/posts');
}

public function destroy($id) {
    $post = Post::findOrFail($id);
    
    $this->authorize('delete', $post);
    
    $post->delete();
    return redirect('/posts');
    }
}