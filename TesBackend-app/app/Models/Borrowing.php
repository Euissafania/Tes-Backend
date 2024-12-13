<?php

namespace App\Models;

use App\Models\Book;
use App\Models\Member;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Borrowing extends Model
{
    use HasFactory;

    protected $table = "borrowings";
    protected $guarded = [];

    public function book()
    {
        return $this->belongsTo(Book::class, 'book_id');
    }
    public function member()
    {
        return $this->belongsTo(Member::class, 'member_id');
    }
}
