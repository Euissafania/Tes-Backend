<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class bookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        try {
            $limit = $request->input('limit', 10);
            $page = $request->input('page', 1);

            $author = $request->input('author');
            $title = $request->input('title');

            $query = Book::query();

            if ($author) {
                $query->whereRaw('LOWER(author) LIKE ?', ['%' . strtolower($author) . '%']);
            }

            if ($title) {
                $query->whereRaw('LOWER(title) LIKE ?', ['%' . strtolower($title) . '%']);
            }

            $books = $query->paginate($limit, ['*'], 'page', $page);

            $data = $books->items(); 

            $data = collect($data)->map(function ($book) {
                return [
                    'id' => $book->id,
                    'title' => $book->title,
                    'author' => $book->author,
                    'published_year' => $book->published_year,
                    'stock' => $book->stock,
                    'isbn' => $book->isbn,
                    'available' => $book->stock > 0 ? true : false, 
                ];
            });

            $pagination = [
                'total' => $books->total(),
                'page' => $books->currentPage(),
                'limit' => $books->perPage(),
                'totalPages' => $books->lastPage(),
            ];

            return response()->json([
                'data' => $data,
                'pagination' => $pagination,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'data not found',
                'message' => $e->getMessage(),
            ], 500);
        }
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
