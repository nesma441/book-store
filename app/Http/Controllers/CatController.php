<?php

namespace App\Http\Controllers;

use App\Http\Requests\CatRequest;
use App\Http\Requests\UserReqest;
use App\Models\Cat;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class CatController extends Controller
{
    public function getCats()
    {
        $cats = Cat::paginate(3);

        return view('Cats/cats', [
            'cats' => $cats
        ]);
    }

    public function show($id)
    {

        $cat = Cat::findOrFail($id) ;

        return view('Cats.show', [
            'cat' => $cat
        ]);
    }
    public function create()
    {
        return view('cats/create');
    }
    public function store(CatRequest $request)

    {
        $imgPath = Storage::putFile('cats', $request->img);
        Cat::create(
            [
                "name" => $request->name,
                "desc" => $request->desc,
                "img" => $imgPath
            ]
        );
        return redirect(url('/cats'));
    }
    public function edit($id)
    {
        $cat = Cat::findOrFail($id);
        return view('cats/edit', ["cat" => $cat]);
    }
    public function update($id, Request $request)
    {

        $cat = Cat::findOrFail($id);
        
        $imgPath = $cat->img;

        if ($request->hasFile('img'))
            $imgPath = Storage::putFile('cats', $request->img);

        $cat->update(
            [
                "name" => $request->name,
                "desc" => $request->desc,
                "img" =>$imgPath
            ]
        );
        return redirect(url('/cats'));
    }
    public function destroy($id)
    {

        Cat::findOrFail($id)->delete();
        return redirect(url('/cats'));
    }
    public function last(Cat $cat)
    {
        $cats = Cat::orderBy('id', 'desc')->take($cat)->get();  // cats d feha a5r kam category et7ato
        return view('latest/cat', ['cats' => $cats]);
    }

    public function search(Request $request)
    {
        $keyword = $request->keyword;
        $searchCats = Cat::where('name', 'like', "%$keyword%")->get();
        return view('Cats/search', ["cats" => $searchCats, "keyword" => $keyword]);
    }
}
