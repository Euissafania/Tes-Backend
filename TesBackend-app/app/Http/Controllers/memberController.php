<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Borrowing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class memberController extends Controller
{

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'email' => 'required|email|unique:members,email|max:255',
            'phone' =>  'required|phone:ID',
            'address' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation errors',
                'errors' => $validator->errors()
            ], 422);
        }
    
        try {
            $member = Member::create($validator->validated());

            return response()->json([
                'success' => true,
                'message' => 'Member created successfully',
                'data' => $member
            ], 201);
    
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Member creation failed',
                'error' => $e->getMessage()
            ], 500);
        }
    }
    
    /**
     * Display the specified resource.
     */
    public function show(Request $request, string $id)
    {
        try{
            $validator = Validator::make($request->all(), [
                'status' => 'nullable|in:borrowed,returned',
                'page' => 'integer|min:1',
                'limit' => 'integer|min:1'
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Validation errors',
                    'errors' => $validator->errors()
                ], 422);
            }
            $page = $request->query('page', 1);
            $limit = $request->query('limit', 10);
            $status = $request->query('status');

            $member = Member::find($id);
            
            if (!$member) {
                return response()->json([
                    'success' => false,
                    'message' => 'Member not found',
                ], 404);
            }

            // Ambil riwayat peminjaman berdasarkan member_id dengan filtering status dan pagination
            $query = Borrowing::with('book')
                ->where('member_id', $id);

            if ($status) {
                $query->where('status', $status);
            }

            $borrowings = $query->paginate($limit, ['*'], 'page', $page);

            return response()->json([
                'success' => true,
                'data' => $borrowings->items(),
                'pagination' => [
                    'total' => $borrowings->total(),
                    'page' => $borrowings->currentPage(),
                    'limit' => $borrowings->perPage(),
                    'totalPages' => $borrowings->lastPage(),
                ],
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'An error occurred while fetching borrowing history',
                'error' => $e->getMessage(),
            ], 500);
        }
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
