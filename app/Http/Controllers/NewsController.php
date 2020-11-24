<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller {

    public function index() {
        $news = News::with('user'); //->simplePaginate(5);

        return view('News/index', [
            'news' => $news
        ]);
    }


    public function create() {
        //
    }


    public function store(Request $request) {
        //
    }


    public function show(int $id) {
        $new = News::where('id', $id)->with('user')->first();

        return view('news.show', [
            'new' => $new
        ]);
    }


    public function edit(int $id) {
        //
    }


    public function update(Request $request, int $id) {
        //
    }


    public function destroy(int $id) {
        //
    }
}
