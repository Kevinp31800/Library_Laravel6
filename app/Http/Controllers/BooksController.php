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

        var_dump('coucou new books');
        $books = new Book;
        var_dump('coucou apres new books');

        $books->title = request('title');
        $books->author = request('author');
        $books->releasedate = request('releasedate');
        $books->save();

        var_dump('coucou new books apres save');
    }
}