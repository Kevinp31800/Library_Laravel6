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

        $books = new Book;

        $books->title = request('title');
        $books->author = request('author');
        $books->releasedate = request('releasedate');
        $books->save();

    }

    public function delete(Book $id)
    {

        var_dump($id);

        $book = Book::where('id',$id);

        var_dump($book->title);
    }
}