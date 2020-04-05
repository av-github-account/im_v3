<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use db;
use App\Post;

class PostsController extends Controller
{
   public function show($slug)
   {
      return View('post', [
         'post' => Post::where('slug', $slug)->firstOrFail()
      ]);
   //   $post = Post::where('slug',$slug)->firstOrFail();
   //   //      $post = DB::table('posts')->where('slug', $slug)->first();
   //   //      dd($post);
   //
   //   //      if (! $post) {
   //   //         abort(404, 'Извините, страница не найдена!');
   //   //      };

   //   return view('post',[
   //      'post' => $post
   //   ]);
   }
}
