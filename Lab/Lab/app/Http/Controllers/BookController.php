<?php

namespace App\Http\Controllers;



use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $highestPricedBooks = Book::orderBy('price', 'desc')->take(8)->get();
        $lowestPricedBooks = Book::orderBy('price', 'asc')->take(8)->get();

        return view('index', compact('highestPricedBooks', 'lowestPricedBooks'));
    }

    public function showByCategory($id)
    {
        $books = Book::where('category_id', $id)->get();
        $category = Category::find($id);

        return view('category', compact('books', 'category'));
    }
}


