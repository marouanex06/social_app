<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Like;

class LikeController extends Controller
{
    public function like($post_id){

Like::create([
'user_id'=>session('user_id'),
'post_id'=>$post_id
]);

}
}
