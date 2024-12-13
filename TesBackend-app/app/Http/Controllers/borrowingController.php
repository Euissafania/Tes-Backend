<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Member;
use App\Models\Borrowing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class borrowingController extends Controller
{

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'book_id' => 'required|uuid|exists:books,id',
            'member_id' => 'required|uuid|exists:members,id',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation errors',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            $book = Book::findOrFail($request->book_id);

            if ($book->stock <= 0) {
                return response()->json([
                    'success' => false,
                    'message' => 'Book is out of stock'
                ], 400);
            }
            $member = Member::findOrFail($request->member_id);
            
            $borrowedBooksCount = Borrowing::where('member_id', $member->id)
                ->where('status', 'BORROWED')
                ->count();

            if ($borrowedBooksCount >= 3) {
                return response()->json([
                    'success' => false,
                    'message' => 'Member has already borrowed 3 books'
                ], 400);
            }

            $book->decrement('stock', 1);

            $borrowing = Borrowing::create([
                'book_id' => $request->book_id,
                'member_id' => $request->member_id,
                'borrow_date' => now(),
                'status' => 'borrowed',
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Book borrowed successfully',
                'data' => $borrowing
            ], 201);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to borrow book',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function update(Request $request, string $id)
    {
        try {

            $borrowing = Borrowing::find($id);
            if (!$borrowing) {
                return response()->json([
                    'success' => false,
                    'message' => 'Borrowing record not found'
                ], 404);
            }
    
            if ($borrowing->status == 'returned') {
                return response()->json([
                    'success' => false,
                    'message' => 'Book has already been returned'
                ], 400);
            }

            $book = Book::find($borrowing->book_id);
    
            if (!$book) {
                return response()->json([
                    'success' => false,
                    'message' => 'Book not found'
                ], 404);
            }
            $borrowing->status = 'RETURNED';
            $borrowing->return_date = now();
            $borrowing->save();
            $book->stock += 1;
            $book->save();

            return response()->json([
                'success' => true,
                'message' => 'Book returned successfully',
                'data' => $borrowing
            ], 200);
    
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Book return failed',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
