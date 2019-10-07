<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Book;
 
class BooksController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('books.index', ['books' => $books]);
    }
    
    public function show(Book $id)
    {
        return view('books.show', ['book' => $id]);
    }
    
    public function create()
    {
        return view('books.create');
    }

    public function store()
    {

        $book = new Book;

        $book->title = request('title');
        $book->author = request('author');
        $book->releasedate = request('releasedate');
        $book->save();

        return redirect('/books');

    }

    public function delete(Book $book)
    {
        $book->delete();

        return redirect('/books');
    }
}