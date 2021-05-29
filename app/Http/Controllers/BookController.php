<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'BookName' => 'required|max:255',
            'AuthorName' => 'required|max:255',
            'Bookimg' => 'required',
            'BookLink' => 'required|max:255',
        ]);

        $data['Bookimg'] = $request->file('Bookimg')->storeAs("public", $data['BookName']);

        $data['category_id'] = $request->category_id;


        $a = Book::create($data);
        Alert::success('Configuration! Book Added Successfully');
        return redirect(url('dashboard'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        $category_id = Category::all();
        $selected_category = Book::with('Category')->get();
        return view('admindash/includes/editbook', compact('book', 'category_id', 'selected_category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $data = $request->validate([
            'BookName' => 'required|max:255',
            'AuthorName' => 'required|max:255',
            'Bookimg' => 'required',
            'BookLink' => 'required|max:255',
        ]);


        $data['category_id'] = $request->category_id;
        $data['Bookimg'] = $request->file('Bookimg')->storeAs("public", $data['BookName']);


        $book->update($data);
        Alert::success('Configuration! Book values Updated Successfully');
        return redirect(url('dashboard'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {

        $book->delete();
        return response()->json(['status' => "Deleted Successfully"]);
        // return redirect(url('dashboard'));
    }
}
