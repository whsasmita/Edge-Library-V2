<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
class backPageController extends Controller
{
    public function index()
    {
        $datas=Book::paginate();
        return view('backPage.dashboard-admin', compact('datas'));
    }
    public function allBooks()
    {
        $datas=Book::paginate();
        return view('backPage.allBooks', compact('datas'));
    }
    public function history()
    {
        return view('backPage.history');
    }

    public function filter(Request $request) {
        $categoryValue = $request->input('category');

        $query = Book::query();
    
        if ($categoryValue) {
            $query->where('category_id', $categoryValue);
        }
    
        $datas = $query->with('category')->paginate(10);
    
        return view('backpage.allBooks', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function addForm()
{
    $action = 'Add New';
    $routes = route('store');
    return view('backPage.addForm', compact('action', 'routes'));
}

public function store(Request $request)
{
    $message = [
        'required' => ':attribute wajib diisi',
        'date' => ':attribute harus berupa tanggal yang valid',
        'file' => ':attribute harus berupa file',
        'mimes' => ':attribute harus berupa file PDF',
        'max' => ':attribute tidak boleh lebih dari :max kilobytes',
    ];

    $request->validate([
        'title' => 'required|string|max:255',
        'author' => 'required|string|max:255',
        'description' => 'required|string',
        'date' => 'required|date',
        'category' => 'required|in:3,4,1,5,6,2,7,8',
        'book-pdf' => 'required|file|mimes:pdf|max:50000',
        'photo' => 'nullable|image|max:5000'
    ], $message);

    $imageName = null;
    if ($request->hasFile('photo')) {
        $image = $request->file('photo');
        $imageName = time() . '_' . $image->getClientOriginalName();
        $image->move(public_path('assets/uploads/cover'), $imageName);
    }

    $pdfFile = $request->file('book-pdf');
    $pdfName = time() . '_' . $pdfFile->getClientOriginalName();
    $pdfFile->move(public_path('assets/uploads/books'), $pdfName);

    Book::create([
        'title' => $request->title,
        'author' => $request->author,
        'description' => $request->description,
        'publish_year' => $request->date,
        'category_id' => $request->category,
        'image' => $imageName, 
        'books' => $pdfName,
    ]);

    return redirect('admin/allBooks');
}

public function edit(string $id)
{
    $book = Book::findOrFail($id);
    $action = 'Edit';
    $routes = route('update', $id);
    return view('backPage.addForm', compact('book', 'action', 'routes'));
}

public function update(Request $request, string $id)
{
    $message = [
        'required' => ':attribute wajib diisi',
        'date' => ':attribute harus berupa tanggal yang valid',
        'file' => ':attribute harus berupa file',
        'mimes' => ':attribute harus berupa file PDF',
        'max' => ':attribute tidak boleh lebih dari :max kilobytes',
    ];

    $request->validate([
        'title' => 'required|string|max:255',
        'author' => 'required|string|max:255',
        'description' => 'required|string',
        'date' => 'required|date',
        'category' => 'required|in:3,4,1,5,6,2,7,8',
        'book-pdf' => 'nullable|file|mimes:pdf|max:50000',
        'photo' => 'nullable|image|max:5000'
    ], $message);

    $book = Book::findOrFail($id);

    if ($request->hasFile('photo')) {
        $image = $request->file('photo');
        $imageName = time() . '_' . $image->getClientOriginalName();
        $image->move(public_path('assets/uploads/cover'), $imageName);

        if ($book->image && file_exists(public_path('assets/uploads/cover/' . $book->image))) {
            unlink(public_path('assets/uploads/cover/' . $book->image));
        }

        $book->image = $imageName;
    }

    if ($request->hasFile('book-pdf')) {
        $pdfFile = $request->file('book-pdf');
        $pdfName = time() . '_' . $pdfFile->getClientOriginalName();
        $pdfFile->move(public_path('assets/uploads/books'), $pdfName);

        if ($book->books && file_exists(public_path('assets/uploads/books/' . $book->books))) {
            unlink(public_path('assets/uploads/books/' . $book->books));
        }

        $book->books = $pdfName;
    }

    $book->title = $request->input('title');
    $book->author = $request->input('author');
    $book->description = $request->input('description');
    $book->publish_year = $request->input('date');
    $book->category_id = $request->input('category');

    $book->save();

    return redirect('admin/allBooks');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
{
    try {
        $data = Book::find($id);
        $data->delete();
        return redirect('admin/allBooks');
    } catch (\Throwable $th) {
        return redirect('admin/allBooks');
    }

}
}
