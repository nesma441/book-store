<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Cat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    // public function index()
    // {

    //     $books = Book::paginate(3);

    //     return view('Books/books',[
    //         'books' => $books
    //     ]);
    // }

    public function show($id)
    {

        //  $cat=Cat::where('id',$id)->with('book')->get();
       //  return $cat[0]->book[0]->name;

         $books =Book::where('cat_id',$id)->with('cat')->get();
         $cat=Cat::where('id',$id)->first();
        return view('Books/books', [
            'books' => $books,
            'cat'   =>$cat ,
        ]);
    }

    public function create($id)
    {
        return view('Books/create',[
        'cat_id'=>$id
        ]
    );
    }


    public function store(Request $request)

    {

        $imgPath = Storage::putFile('books', $request->img);

        $book = new Book();
        $book->name = $request->name;
        $book->desc = $request->desc;
        $book->img =$imgPath;
        $book->price = $request->price;
        $book->cat_id =$request->cat_id ;
        $book->save();


        // Book::create(
        //     [
        //         "name" => $request->name,
        //         "desc" => $request->desc,
        //         "img" => $imgPath,
        //         "price"=>$request->price,
        //         "cat_id"=>$request->id
        //     ]
        // );
        return redirect(url('/cats'));
    }

}
