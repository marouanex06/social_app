<?php
namespace App\Http\Controllers;

use App\Models\Like;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function store($post_id) {
        $already = Like::where('user_id', session('user_id'))
                       ->where('post_id', $post_id)
                       ->exists();

        if (!$already) {
            Like::create([
                'user_id' => session('user_id'),
                'post_id' => $post_id,
            ]);
        }

        return back();
    }

    public function destroy($post_id) {
        Like::where('user_id', session('user_id'))
            ->where('post_id', $post_id)
            ->delete();

        return back();
    }
}