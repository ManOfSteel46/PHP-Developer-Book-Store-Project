<?php

namespace App\Http\Controllers;

use App\Book;
use App\Order;
use App\User;
use Illuminate\Http\Request;
use Session;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::orderBy('id','desc')->paginate(5);
        return view('books.index')->with('storedBooks',$books);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'newAutor' => 'required|min:5|max:255',
            'newTitle' => 'required|min:5|max:255',
        ]);

        $book = new Book;
        $book->autor = $request->newAutor;
        $book->title = $request->newTitle;
        $book->save();
 
        Session::flash('success','New book has been added successfuly');
        return redirect()->route('books.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = book::find($id);

        return view('books.edit')->with('bookUnderEdit',$book);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
           'updteAutor|min:5|max:255',
           'updateTitle|min:5|max:255',
        ]);

        $book = Book::find($id);

        $book->autor = $request->updteAutor;
        $book->title = $request->updateTitle;
        $book->save();

        Session::flash('success','Book #'.$id.'has been successfuly updated');
        return redirect()->route('books.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::find($id);

        $book->delete();

        Session::flash('success','Client #'.$id.'has been successfuly deleted');

        return redirect()->route('books.index');
    }
}
