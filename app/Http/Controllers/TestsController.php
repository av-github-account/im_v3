<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestsController extends Controller
{
   public function show($abc) {
         $cats = [
            'page1' => 'Страница 1!',
            'page2' => 'Страница 2!'
         ];

         if (! array_key_exists($abc,$cats)) {
            abort(404, 'Извините, страница не найдена!');
         };

         return view('test3',[
            'cat' => $cats[$abc] //?? 'Nothing yet here!'  //<- если нет page1 и page2
         ]);
   }
}
