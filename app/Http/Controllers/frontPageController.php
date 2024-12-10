<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Book;

class FrontPageController extends Controller
{
    public function index()
    {
        $datas=Book::paginate(8);
        return view('frontpage.landingPage', compact('datas'));
    }

    public function search(Request $request)
{
    // Validate the search input
    $validated = $request->validate([
        'search' => 'nullable|string|max:255'
    ]);

    // Create a query builder instance
    $query = Book::query();

    // Apply search filter if search term exists
    if ($request->filled('search')) {
        $searchName = $request->input('search');
        $query->where(function($q) use ($searchName) {
            $q->where('title', 'like', '%' . $searchName . '%')
              ->orWhere('author', 'like', '%' . $searchName . '%')
              ->orWhere('description', 'like', '%' . $searchName . '%');
        });
    }

    // Paginate the results with a reasonable default
    $datas = $query->paginate(10);

    // Return the view with paginated results
    return view('frontpage.books', compact('datas'));
}
    public function books()
    {
        $datas=Book::paginate();
        return view('frontpage.books', compact('datas'));
    }

    public function booksDetail($id_books)
{
    $datas = Book::findOrFail($id_books);
    return view('frontpage.booksDetail', compact('datas'));
}

public function readingPage($id_books, $title)
{
    // Ambil data buku berdasarkan ID
    $datas = Book::findOrFail($id_books);
    
    return view('frontpage.readingPage', compact('id_books', 'title', 'datas'));
}
}
