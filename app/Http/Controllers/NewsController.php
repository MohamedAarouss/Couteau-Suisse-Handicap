<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller {
    private $validations;

    public function __construct() {
        $this->validations = [
            'title' => 'required',
            'url' => '',
            'image' => '',
            'department' => 'required',
            'informations' => 'required',
        ];
    }

    public function index() {
        $news = News::with('user'); //->simplePaginate(5);

        return view('news.index', [
            'news' => $news
        ]);
    }


    public function create() {
        return view('news.create');
    }


    public function store(Request $request) {
        $postData = $this->validate($request, $this->validations);
        /*News::create($request->all());*/

        News::create([
            'title' => $request->title,
            'user' => Auth::user()->name,
            'department' => $request->department,
            'informations' => $request->informations,
            'url' => $request->url,
            'img' => $request->img,
        ]);

        return redirect()->route('news.index')->with('status', 'La news a bien été créée.');
    }


    public function show($id) {
        if (is_numeric($id)) {
            $new = News::where('id', $id)->with('user')->first();

            return view('news.show', [
                'new' => $new
            ]);
        }
        abort(404);
    }


    public function edit($id) {
        //
    }


    public function update(Request $request, $id) {
        //
    }


    public function destroy($id) {
        //
    }
}
