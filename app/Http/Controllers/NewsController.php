<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{
    private $validations;

    public function __construct()
    {
        $this->validations = [
            'title' => 'required',
            'url' => '',
            'img' => '',
            'department' => 'required',
            'informations' => 'required',
        ];
    }

    public function index()
    {
        $news = News::with('user'); //->simplePaginate(5);

        return view('news.index', [
            'news' => $news
        ]);
    }


    public function create()
    {
        return view('news.create');
    }


    public function store(Request $request)
    {
        $data = $this->validate($request, $this->validations);
        /*News::create($request->all());*/

        $new = new News();

        $new->title = $request->input('title');
        $new->department = $request->input('department');
        $new->user = Auth::user()->name;
        $new->informations = $request->input('informations');
        $new->url = $request->input('url');

        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('storage/images', $filename);
            $new->img = $filename;
        } else {
            $new->img = '';
        }

        $new->save();

        return redirect()->route('news.index')->with('success', 'La news a été créée avec succès.');
    }


    public function show($id)
    {
        if (is_numeric($id)) {
            $new = News::where('id', $id)->with('user')->first();

            return view('news.show', [
                'new' => $new
            ]);
        }
        abort(404);
    }


    public function edit($id)
    {
        if (is_numeric($id)) {
            $new = News::where('id', $id)->with('user')->first();
            //$this->authorize('edit', $course);

            return view('news.edit', [
                'new' => $new,
            ]);
        } else {
            abort(404);
        }
    }


    public function update(Request $request, $id)
    {
        $new = News::find($id);

        $new->title = $request->input('title');
        $new->department = $request->input('department');
        $new->user = Auth::user()->name;
        $new->informations = $request->input('informations');
        $new->url = $request->input('url');

        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('storage/images', $filename);
            $new->img = $filename;
        } else {
            $new->img = '';
        }

        $new->save();

        return redirect()->route('news.index')->with('success', 'La news a été modifiée.');
    }


    public function destroy($id)
    {
        $new = News::findOrFail($id);
        $new->delete();

        return redirect()->route('news.index')->with('success', 'La news a été supprimée.');
    }
}
